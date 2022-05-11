<?php

namespace App\Controller\Sandbox;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package App\Controller\Sandbox
 *
 * @Route("/sandbox/injection" , name="sandbox_injection")
 */
class SandboxInjectionController extends AbstractController
{
    /**
     * @Route("/un", name = "_un")
     */
    public function unAction(Request $request): Response
    {
        dump($request->query->get('toto'));
        dump($request->query->all());
        return new Response('<body>SandboxInjection::un</body>');
    }


    /**
     * @Route("/deux", name = "_deux")
     */
    public function deuxAction(Session\Session $session): Response
    {
        $session->set('compteur', 3);
        $session->set('compteur', $session->get('compteur') + 1);
        $session->remove('compteur');
        dump($session->all());
        dump($_SESSION);
        return new Response('<body>SandboxInjection::deux</body>');
    }


    /**
     * @Route("/create-flash", name = "_create_flash")
     */
    public function createFlashAction(Session\Session $session): Response
    {
        $session->getFlashBag()->add('info', 'L\'enregistrement a été supprimé');
        $this->addFlash('info', 'et définitivement');
        $session->getFlashBag()->add('error', 'L\'enregistrement n\'a pas été supprimé');
        $this->addFlash('error', 'pas définitivement');
        return $this->redirectToRoute('sandbox_injection_display_flash');
    }


    /**
     * @Route("/display-flash", name = "_display_flash")
     */
    public function displayFlashAction(): Response
    {
        return $this->render('Sandbox/SandboxInjection/displayFlash.html.twig');
    }
}
