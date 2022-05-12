<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Toutes les routes liées à l'administration commencera par /admin
 *
 * @Route("/sadmin", name="super_admin_")
 */
class SuperAdminController extends AbstractController
{
    protected $em;

    public function __construct(EntityManagerInterface $entityManager){
        $this->em = $entityManager;
    }


    /**
     *  Lister les administrateurs
     *
     *
     * @Route("/listadmins", name="listadmins")
     * @param UserRepository $users
     * @return Response
     */
    public function usersList(UserRepository $users, Request $request): Response
    {
        $role = "ROLE_ADMIN";

        $adminUser = $users->findByRole($role);

        return $this->render('superadmin/admins.html.twig', ['users' => $adminUser]);
    }
}
