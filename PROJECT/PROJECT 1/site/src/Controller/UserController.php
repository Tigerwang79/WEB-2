<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserType;
use App\Form\RegistrationType;
use App\Repository\ProduitRepository;
use App\Service\Total;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


/* Ce controller est pour l'utilisation des Clients du site */

/**
 * Toutes les routes liées à l'utilisateur commencera par /user
 *
 * @Route("/user", name="user_")
 */
class UserController extends AbstractController
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     *  Editer le profil de l'utilisateur
     *
     *
     * @Route("/utilisateur/modifier/{id<\d+>}", name="edit")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function editUser(User $user, Request $request, UserPasswordHasherInterface $hashedPassword): Response
    {
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        $em = $this->em;

        if($form->isSubmitted() && $form->isValid()){

            $hash = $hashedPassword->hashPassword($user, $user->getPassword());//cryptage du mot de passe
            $user->setPassword($hash);
            $em->persist($user);
            $em->flush();
            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('produit_products');

        }
        $this->addFlash('message', 'Echec de la modification du profil');
        return $this->render('user/edituser.html.twig', [
            'form' => $form->createView(), 'id' => $user->getId()
        ]);
    }

    /**
     *  Gestion du panier de l'utilisateur
     *
     *
     * @Route("/utilisateur/panier/{id<\d+>}", name="panier")
     * @param User $user
     * @return Response
     */
    public function panierUser( User $user, Total $total): Response
    {
        $em = $this->em;
        $reponse = $total->getTotal($user);
        $paniers = $user->getPanier();

        return $this->render('user/panier.html.twig', [
            'paniers' => $paniers,
            'reponse' => $reponse
        ]);
    }


    /**
     *  Supprimer un produit du panier
     *
     *
     * @Route("/user/supprimer/{id<\d+>}/{index<\d+>}", name="delete_product")
     * @param User $user
     * @return Response
     */
    public function deleteProduct(ProduitRepository $produitRepository, User $user, int $index): Response
    {
        $em = $this->em;

        $paniers = $user->getPanier();

        $produit = $produitRepository->find($paniers[$index]->getProduit()->getId());
        $produit->setQuantite($produit->getQuantite() + $paniers[$index]->getQuantite());
        $em->remove($paniers[$index]);
        $em->flush();

        $this->addFlash('message', 'Produit supprimé avec succès');

        return $this->redirectToRoute('user_panier', ['id' => $user->getId()]);
    }

    /**
     *  Vider le panier
     *
     *
     * @Route("/user/vider/{id<\d+>}/{role<\d+>}", name="delete_panier")
     * @param User $user
     * @return Response
     */
    public function deletePanier(ProduitRepository $produitRepository, User $user, int $role): Response
    {
        $em = $this->em;

        $paniers = $user->getPanier();

        $max = count($user->getPanier());

        for ($i =0 ; $i < $max ; $i++)
        {
            $produit = $produitRepository->find($paniers[$i]->getProduit()->getId());
            $produit->setQuantite($produit->getQuantite() + $paniers[$i]->getQuantite());
            $em->remove($paniers[$i]);
            $em->flush();
        }

        $this->addFlash('message', 'Panier vidé avec succès');

        if ($role == 0){
            return $this->redirectToRoute('user_panier', ['id' => $user->getId()]);
        }
        else{
            return $this->redirectToRoute('admin_users', ['id' => $user->getId()]);
        }
    }

}
