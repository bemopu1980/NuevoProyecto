<?php

namespace App\Controller;
use App\Entity\{Categoria,Productos};
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class ProductosController extends AbstractController
{
    /**
     * @Route("/productos/{currentPage?1}/{currentCategory?categoria1}", name="productos")
     */
    public function index(Request $request,SessionInterface $session,$currentPage,$currentCategory)
    { 
        $categoria = $this ->getDoctrine()
                           ->getRepository(Categoria::Class)
                           ->findOneBy(['categoria'=> $currentCategory]);
        $Result = $this ->getDoctrine()
                        ->getRepository(Productos::Class)
                        ->findBy(['categoria'=>$categoria->getId()]);

        $usuario = $request->request->get('usuario');
        $usuario = $session->get('usuario');
        return $this->render('productos.html.twig', [
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: ",
            'data'=> $Result,
            'currentPage'=> $currentPage,
            'currentCategory'=> $currentCategory,
            'imgPorPagina'=> 4
        ]);
    }
}