<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class EnvioController extends AbstractController
{
    /**
     * @Route("/envio", name="envio")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $usuario = $request->request->get('usuario');
        $usuario = $session->get('usuario');
        return $this->render('envio.html.twig', [
            'controller_name' => 'EnvioController',
            'name' => $request->request->get('name'),
            'email'=> $request->request->get('email'),
            'subject'=> $request->request->get('subject'),
            'message' => $request->request->get('message'),
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: "
        ]);
    }
}
