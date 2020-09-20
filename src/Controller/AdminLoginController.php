<?php

namespace App\Controller;

use App\Entity\Admin;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AdminLoginController extends AbstractController
{
    /**
     * @Route("/admin/login", name="admin_login")
     */
    public function adminLogin(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser() && $this->getUser() instanceof Admin) {
            return $this->redirectToRoute('easyadmin');
        }

        if (empty($this->getDoctrine()->getManager()->getRepository(Admin::class)->findAll())) {
            $this->addFlash('info', 'Aucun utilisateur existant. Créez le premier compte administrateur.');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('admin/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
}
