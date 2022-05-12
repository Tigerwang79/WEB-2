<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\User;
use App\Form\EditUserType;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/* Ce controller est pour l'utilisation des Administrateur du site */

/**
 * Toutes les routes liées à l'administration commencera par /admin
 *
 * @Route("/admin", name="admin_")
 */
class AdminController extends AbstractController
{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }


    /**
     * Se donner le role  de super admin
     *
     * @Route("/ajout/{id<\d+>}", name="add")
     * @param User $user
     * @return Response
     */
    public function add(User $user): Response
    {
        $em = $this->em;
        $user->setRoles(['ROLE_SUPER_ADMIN']);

        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('site');
    }


    /**
     *  Lister les utilisateurs
     *
     *
     * @Route("/utilisateurs", name="users")
     * @param UserRepository $users
     * @return Response
     */
    public function usersList(UserRepository $users, Request $request): Response
    {
        $role = "ROLE_CLIENT";

        $clientUser = $users->findByRole($role);

        return $this->render('admin/users.html.twig', ['users' => $clientUser]);
    }

    /**
     *  Editer un utilisateur
     *
     *
     * @Route("/utilisateur/modifier/{id<\d+>}", name="edit_user")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function editUser(User $user, Request $request): Response
    {
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        $em = $this->em;

        if($form->isSubmitted() && $form->isValid()){

            //$em->persist($user);
            $em->flush();
            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('admin_users');

        }
        return $this->render('admin/edituser.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     *  Supprimer un utilisateur
     *
     *
     * @Route("/utilisateur/supprimer/{id<\d+>}", name="delete_user")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function deleteUser(User $user, Request $request): Response
    {


        $em = $this->em;
        $em->remove($user);
        //$em->persist($user);
        $em->flush();
        $this->addFlash('message', 'Utilisateur modifié avec succès');

        return $this->redirectToRoute('admin_users');
    }

    /**
     *  Ajouter un produit dans la table des produits
     *
     *
     * @Route("/produit/ajouter", name="add_product")
     * @param Request $request
     * @return Response
     */
    public function addProduct(Request $request, ProduitRepository $prod): Response
    {

        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        $em = $this->em;

        if($form->isSubmitted() && $form->isValid()){

            $em->persist($produit);
            $em->flush();
            $this->addFlash('message', 'Produit bien enregistré');
            return $this->redirectToRoute('site');

        }
        return $this->render('admin/ajouterProduit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    public function routeSuperAdmin(): Response
    {
        return $this->render('menu/superadmin.html.twig');
    }

}
