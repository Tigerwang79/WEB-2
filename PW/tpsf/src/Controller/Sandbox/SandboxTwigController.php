<?php

namespace App\Controller\Sandbox;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package App\Controller\Sandbox
 *
 * @Route("/sandbox/twig" , name="sandbox_twig")
 */
class SandboxTwigController extends AbstractController
{
    /**
    * @Route("/vue1", name="_vue1")
    */
    public function vue1Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue1.html.twig');
    }


    /**
     * @Route("/vue2", name="_vue2")
     */
    public function vue2Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue2.html.twig');
    }


    /**
     * @Route("/vue3", name="_vue3")
     */
    public function vue3Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue3.html.twig');
    }


    /**
     * @Route("/vue4", name="_vue4")
     */
    public function vue4Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue4.html.twig');
    }


    public function menuAction(): Response
    {
        $args = array('items' => array('connexion/deconnexion', 'liste des vues', 'politique des cookies'));
        return $this->render('Sandbox/Layouts/menu.html.twig', $args);
    }


    /**
     * @Route("/vue5", name="_vue5")
     */
    public function vue5Action(): Response
    {
        return $this->render('Sandbox/SandboxTwig/vue5.html.twig');
    }


    private function getTableau()
    {
        return array(
            'mentions' => array(
                'Info' => array(
                    'nom' => 'Informatique',
                    'parcours' => array(
                        'Informatique',
                        'Image'
                    ),
                    'responsable' => 'SJ',
                ),
                'PC' => array(
                    'nom' => 'Physique-Chimie',
                    'parcours' => array(
                        'Physique',
                        'Chimie minérale'
                    ),
                    'responsable' => 'GA',
                ),
                'Bio' => array(
                    'nom' => 'Biologie',
                    'parcours' => array(
                        'Géologie',
                        'Biologie végétale',
                        'Biologie animale'
                    ),
                    'responsable' => 'MN',
                ),
            ),
            'ues' => array(
                array(
                    'nom' => 'Algo 1',
                    'volume' => 54
                ),
                array(
                    'nom' => 'Maths discrètes',
                    'volume' => 40
                ),
                array(
                    'nom' => 'Anglais S1',
                    'volume' => 20
                ),
                array(
                    'nom' => 'Anglais S2',
                    'volume' => 20
                ),
                array(
                    'nom' => 'Projet',
                    'volume' => 70
                )
            )
        );
    }


    /**
     * @Route("/vue6", name="_vue6")
     */
    public function vue6Action(): Response
    {
        $args = array(
            'prenom' => 'Valdrin',
            'mail' => 'valdrin.salihi@etu.univ-poitiers.fr',
            'offre' => $this->getTableau()
        );

        return $this->render('Sandbox/SandboxTwig/vue6.html.twig', $args);
    }
}
