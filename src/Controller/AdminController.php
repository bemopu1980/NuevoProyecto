<?php

namespace App\Controller;
use App\Entity\{Categoria,Productos};
use Symfony\Component\HttpFoundation\Request;
use App\Repository\{CategoriaRepository,ProductosRepository};
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(Request $request, SessionInterface $session,CategoriaRepository $categoriaRepository,ProductosRepository $productosRepository)
    {
        $user = $this->getUser();
        $usuario = $request->request->get('usuario');
        $usuario = $session->get('usuario');
        return $this->render('admin.html.twig', [
            'controller_name' => 'AdminController',
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: ",
            'categorias' => $categoriaRepository->findAll(),
            'productos' => $productosRepository->findAll(),
            'usuario'=> $user ->getUsername()
        ]);
    }
}
