<?php

namespace App\Controller\Sandbox;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package App\Controller\Sandbox
 *
 * @Route("/sandbox/produit" , name="sandbox_produit")
 */
class SandboxProduitController extends AbstractController
{
    /**
     * @Route("/list", name = "_list")
     */
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $produitRepository = $em->getRepository('App:Produit');
        $produits = $produitRepository->findAll();
        $args = array(
            'produits' => $produits
        );
        return $this->render("Sandbox/SandboxProduit/listProduit.html.twig", $args);
    }


    /**
     * @Route(
     *     "/view/{id}",
     *     name = "_view",
     *     requirements = { "id" : "[1-9]\d*" }
     *     )
     */
    public function viewAction(int $id, EntityManagerInterface $em): Response
    {
        $produitRepository = $em->getRepository('App:Produit');
        $produit = $produitRepository->find($id);
        $args = array(
            'produit' => $produit,
            'id' => $id
        );
        return $this->render("Sandbox/SandboxProduit/viewProduit.html.twig", $args);
    }


    /**
     * @Route(
     *     "/delete/{id}",
     *     name = "_delete",
     *     requirements = { "id" : "[1-9]\d*" }
     *     )
     */
    public function deleteAction(int $id, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $produitRepository = $em->getRepository('App:Produit');
        $produit = $produitRepository->find($id);

        if (is_null($produit))
        {
            $this->addFlash('info', 'Produit n°' . $id . ' : erreur suppression');
            throw new NotFoundHttpException('Produit n°' . $id . ' inexistant');
        }
        $em->remove($produit);
        $em->flush();
        $this->addFlash('info', 'Produit n°' . $id . ' supprimé');

        return $this->redirectToRoute('sandbox_produit_list');
    }
}
