<?php

namespace App\Controller;
use App\Entity\{Categoria,Productos,User};
use Symfony\Component\HttpFoundation\Request;
use App\Repository\{CategoriaRepository,ProductosRepository,UserRepository};
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(Request $request, SessionInterface $session,CategoriaRepository $categoriaRepository,ProductosRepository $productosRepository,UserRepository $UserRepository)
    {
        $user = $this->getUser();
        $usuario = $request->request->get('usuario');
        $usuario = $session->get('usuario');
        return $this->render('admin.html.twig', [
            'controller_name' => 'AdminController',
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: ",
            'categorias' => $categoriaRepository->findAll(),
            'productos' => $productosRepository->findAll(),
            'users' => $UserRepository->findAll(),
            'usuario'=> $user ->getUsername()
        ]);
    }
}
