<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('index.html.twig', [
            'controller_name' => 'IndexController',
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: "
         ]);
    }
}
