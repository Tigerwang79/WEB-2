<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

/* Ce controller accueil les actions du Super Administrateur du site */

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

    /**
     * Route pour la création d'admin
     *
     * @Route("/registration", name="registrationadmin")
     * @param Request $request
     * @param UserRepository $users
     * @param UserPasswordHasherInterface $hashedPassword
     * @return Response
     */
    public function registrationAdmin(Request $request, UserPasswordHasherInterface $hashedPassword, UserRepository $users): Response
    {
        $em = $this->em;
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $user->setRoles(["ROLE_ADMIN"]);
            $hash = $hashedPassword->hashPassword($user, $user->getPassword());
            $user->setPassword($hash);
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('super_admin_listadmins');
        }

        return $this->render('security/registrationAdmin.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     *  Editer le profil du super admin
     *
     *
     * @Route("/modifier/{id<\d+>}", name="modif")
     * @param User $user
     * @param Request $request
     * @return Response
     */
    public function editSAdmin(User $user, Request $request, UserPasswordHasherInterface $hashedPassword): Response
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

            return $this->redirectToRoute('site');
        }

        $this->addFlash('message', 'Echec de la modification du profil');

        return $this->render('superadmin/editSuperAdmin.html.twig', [
            'form' => $form->createView(), 'id' => $user->getId()
        ]);
    }


    /**
     *  Supprimer un administrateur
     *
     *
     * @Route("/administrateur/supprimer/{id<\d+>}", name="delete_admin")
     * @param User $user
     * @return Response
     */
    public function deleteAdmin(User $user): Response
    {
        $em = $this->em;
        $em->remove($user);
        $em->flush();
        $this->addFlash('message', 'Utilisateur modifié avec succès');

        return $this->redirectToRoute('super_admin_listadmins');
    }
}
