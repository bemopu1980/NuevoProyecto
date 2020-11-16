<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(SessionInterface $session)
    {
        $usuario = $session->get('usuario');
        return $this->render('post.html.twig', [
            'controller_name' => 'PostController',
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: "
        ]);
    }
}
