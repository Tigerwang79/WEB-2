<?php

namespace App\Controller;

use App\Entity\Panier;

use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/* Ce controller est pour la gestion des produits avec l'utilisateur */


/**
 * Toutes les routes liées aux produtis commenceront par /produit
 *
 * @Route("/produit", name="produit_")
 */
class ProduitController extends AbstractController
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }

    /**
     *  Liste des Produits du site
     *
     *
     * @Route("/listeproduits", name="products")
     * @param ProduitRepository $products
     * @param Request $request
     * @param UserRepository $user
     * @return Response
     * @throws NonUniqueResultException
     */
    public function productList(ProduitRepository $products, Request $request, UserRepository $user): Response
    {
        $produitList = $products->findAll();
        $em = $this->em;

        $currentUser = $user->findOneBySomeField($this->getUser()->getUserIdentifier()); //récupération de l'utilisateur connecté

        if($request->request->count() > 0){

            //récupération des choix effectué par l'utilisateur
            $choix = $request->request->get('choix');


            //modifier la quantité de toute les produits en fonction de la quantité prise
            for($i =0; $i < count($produitList); $i++){

                if((int)$choix[$i] != 0){

                    $panier = new Panier();
                    $currentUser->addPanier($panier);

                    $produitList[$i]->setQuantite(( (int)$produitList[$i]->getQuantite() ) - ( (int)$choix[$i]) );
                    $panier->setQuantite((int)$choix[$i]);

                    $produitList[$i]->addPanier($panier);
                    $em->persist($panier);
                    $em->flush();
                }
            }

            return $this->redirectToRoute('user_panier', ['id' => $currentUser->getId()]);
        }
        return $this->render('produit/productList.html.twig',['products'=>$produitList]);
    }


}
