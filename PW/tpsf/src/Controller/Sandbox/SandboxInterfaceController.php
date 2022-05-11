<?php

namespace App\Controller\Sandbox;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package App\Controller\Sandbox
 *
 * @Route("/sandbox/interface" , name="sandbox_interface")
 */

class SandboxInterfaceController extends AbstractController
{
    /**
     * @Route("/un", name = "_un")
     */
    public function unAction(Request $request): Response
    {
        $request->query->get('toto');
        $request->request->get('toto');
        $request->cookies->get('toto');
        $request->query->all();
        return new Response('<body>SandboxInterface::un ' . $request . ' </body>');
    }
}
