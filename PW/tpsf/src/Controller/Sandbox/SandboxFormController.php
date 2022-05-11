<?php

namespace App\Controller\Sandbox;

use App\Entity\Film;
use App\Form\FilmType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @package App\Controller\Sandbox
 *
 * @Route("/sandbox/form" , name="sandbox_form")
 */
class SandboxFormController extends AbstractController
{
    /**
    * @Route(
    * "/film/edit/{id}",
    * name = "_film_edit",
    * requirements = {"id" = "[1-9]\d*"},
    * )
    */
    public function filmEditAction($id, EntityManagerInterface $em): Response
    {
        $filmRepository = $em->getRepository('App:Film');
        $film = $filmRepository->find($id);

        if (is_null($film)){
            throw new NotFoundHttpException('film inexistant');
        }
        $form = $this->createForm(FilmType::class, $film);
        $form->add('send', SubmitType::class, ['label' => 'edit film']);

        $args = array('myform' => $form->createView());
        return $this->render('Sandbox/SandboxForm/film_edit.html.twig', $args);
    }


    /**
     * @Route(
     * "/film/editbis/{id}",
     * name = "_film_editbis",
     * requirements = {"id" = "[1-9]\d*"},
     * )
     */
    public function filmEditBisAction($id, EntityManagerInterface $em, Request $request): Response
    {
        $filmRepository = $em->getRepository('App:Film');
        $film = $filmRepository->find($id);

        if (is_null($film)){
            throw new NotFoundHttpException('film inexistant');
        }

        $form = $this->createForm(FilmType::class, $film);
        $form->add('send', SubmitType::class, ['label' => 'edit film']);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('info', 'édition film réussie');
            return $this->redirectToRoute('sandbox_doctrine_critique_view2', ['id' => $film->getId()]);
        }

        if ($form->isSubmitted()){
            $this->addFlash('info', 'édition incorrecte');
        }

        $args = array('myform' => $form->createView());
        return $this->render('Sandbox/SandboxForm/film_editbis.html.twig', $args);
    }


    /**
    * @Route("/film/validation", name = "_film_validation")
    */
    public function filmValidationAction(ValidatorInterface $validator): Response
    {
        $film = new Film();
        $film->setNom(str_repeat('abc', 100)) // trop long
        ->setAnnee(1849) // année trop petite
        ->setEnstock(false) // incohérent avec la quantitée (callback)
        ->setPrix(3.14)
        ->setQuantite(15);
        dump($validator->validate($film));
        return new Response('<body>cf. dump</body>');
    }
}