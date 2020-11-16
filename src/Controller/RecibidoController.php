<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class RecibidoController extends AbstractController
{
    /**
     * @Route("/recibido", name="recibido")
     */
    public function index(Request $request,SessionInterface $session)
    {
        $usuario = $request->request->get('usuario');
        $session->set('usuario', $usuario);

        return $this->redirectToRoute('index');
    }
}
