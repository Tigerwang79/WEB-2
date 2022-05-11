<?php

namespace App\Controller\Sandbox;

use App\Entity\Critique;
use App\Entity\Film;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package App\Controller\Sandbox
 *
 * @Route("/sandbox/doctrine" , name="sandbox_doctrine")
 */
class SandboxDoctrineController extends AbstractController
{
    /**
     * @Route("/list", name = "_list")
     */
    public function listAction(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $filmRepository = $em->getRepository('App:Film');
        $films = $filmRepository->findAll();
        $args = array(
            'films' => $films
        );

        return $this->render("Sandbox/SandboxDoctrine/listFlash.html.twig", $args);
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
        $filmRepository = $em->getRepository('App:Film');
        $film = $filmRepository->find($id);
        $args = array(
            'film' => $film,
            'id' => $id
        );

        return $this->render("Sandbox/SandboxDoctrine/viewFlash.html.twig", $args);
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
        $filmRepository = $em->getRepository('App:Film');
        $film = $filmRepository->find($id);

        if (is_null($film))
        {
            $this->addFlash('info', 'Film n°' . $id . ' : erreur suppression');
            throw new NotFoundHttpException('film' . $id . 'inexistant');
        }

        $em->remove($film);
        $em->flush();
        $this->addFlash('info', 'Film n°' . $id . ' supprimé');

        return $this->redirectToRoute('sandbox_doctrine_list');
    }


    /**
     * @Route("/display-flash-list", name = "_display_flash_list")
     */
    public function displayFlashAction(): Response
    {
        return $this->render('Sandbox/SandboxDoctrine/listFlash.html.twig');
    }


    /**
     * @Route("/ajouterendur", name = "_ajouterendur")
     */
    public function ajouterendurAction(ManagerRegistry $doctrine) : Response
    {
        $em = $doctrine->getManager();

        $film = new Film();
        $film->setNom('Ça')
            ->setAnnee(2016)
            ->setEnstock(true)
            ->setPrix(45.99)
            ->setQuantite(60);
        dump($film);

        $em->persist($film);
        $em->flush();
        dump($film);

        return $this->redirectToRoute('sandbox_doctrine_view', ['id' => $film->getId()]);
    }


    /**
     * @Route("/modifierendur", name = "_modifierendur")
     */
    public function modifierendurAction(ManagerRegistry $doctrine) : Response
    {
        $id = 2;
        $em = $doctrine->getManager();
        $filmRepository = $em->getRepository('App:Film');


        $film = $filmRepository->find($id);
        $film->setQuantite($film->getQuantite() + 10);
        $film->setPrix(15.98);

        $em->flush();

        return $this->redirectToRoute('sandbox_doctrine_view', ['id' => $id]);
    }


    /**
     * @Route("/effacerendur", name = "_effacerendur")
     */
    public function effacerendurAction(ManagerRegistry $doctrine) : Response
    {
        $id = 2;
        $em = $doctrine->getManager();
        $filmRepository = $em->getRepository('App:Film');


        $film = $filmRepository->find($id);

        $em->remove($film);
        $em->flush();

        return $this->redirectToRoute('sandbox_doctrine_view');
    }


    /**
     * @Route("/viewendur", name = "_viewendur")
     */
    public function viewendurAction(): Response
    {
        return $this->render('Sandbox/SandboxDoctrine/viewendur.twig');
    }


    /**
    * @Route("/critique/ajouterendur", name = "_critique_ajouterendur")
    */
     public function critiqueAjouterendurAction(ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();

        $film = new Film();
        $film->setNom('Le grand bleu')
            ->setAnnee(1988)
            ->setEnstock(true) // inutile : valeur par d´efaut
            ->setPrix(9.99)
            ->setQuantite(95);
        $em->persist($film);

        $critique1 = new Critique();
        $critique1->setNote(5)
            ->setAvis("sa a changer tout ma vi")
            ->setFilm($film);
        $em->persist($critique1);

        $critique2 = new Critique();
        $critique2->setNote(0)
            ->setAvis("Le grand vide plut^ot !")
            ->setFilm($film);
        $em->persist($critique2);

        $em->flush();

        dump($film);

        return $this->redirectToRoute('sandbox_doctrine_critique_view1', ['id' => $film->getId()]);
    }

    /**
     * @Route(
     * "/critique/view1/{id}",
     * name = "_critique_view1",
     * requirements = {"id" = "[1-9]\d*"}
     * )
     */
    public function critiqueView1Action(int $id, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $filmRepository = $em->getRepository('App:Film');
        $critiqueRepository = $em->getRepository('App:Critique');

        $film = $filmRepository->find($id);
        if (is_null($film))
        throw new NotFoundHttpException('Le film ' . $id . ' n\'existe pas;');

        $critiques = $critiqueRepository->findBy(array('film' => $film));

        $args = array(
        'film' => $film,
        'critiques' => $critiques,
        );
        return $this->render('Sandbox/SandboxDoctrine/critiqueView1.html.twig', $args);
    }


    /**
    * @Route(
    * "/critique/view2/{id}",
    * name = "_critique_view2",
    * requirements = {"id" = "[1-9]\d*"}
    * )
    */
    public function critiqueView2Action(int $id, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager();
        $filmRepository = $em->getRepository('App:Film');
        $critiqueRepository = $em->getRepository('App:Critique');

        $film = $filmRepository->find($id);
        if (is_null($film))
        throw new NotFoundHttpException('Le film ' . $id . ' n\'existe pas;');

        $args = array(
        'film' => $film,
        );
        return $this->render('Sandbox/SandboxDoctrine/critiqueView2.html.twig', $args);
    }
}