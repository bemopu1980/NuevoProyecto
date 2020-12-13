<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request,SessionInterface $session)
    {
        $usuario = $request->request->get('usuario');
        $usuario = $session->get('usuario');
        return $this->render('login.html.twig', [
            'controller_name' => 'LoginController',
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: "
        ]);
    }
}
