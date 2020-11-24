<?php

namespace App\Controller;
use App\Entity\Contacto;
use App\Form\ContactoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request,SessionInterface $session)
    {
        $contacto=new Contacto();
        $form= $this->createForm(ContactoType::class, $contacto);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $contacto->setDate(new \DateTime("now"));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager ->persist($contacto);
            $entityManager ->flush();
        }
        $usuario = $request->request->get('usuario');
        $usuario = $session->get('usuario');
        return $this->render('contact.html.twig', [
            'controller_name' => 'ContactController',
            'usuario' => strlen($usuario)>0?$usuario. " estas contectad@":"Introduce tus datos: ",
            'form' =>$form->createView()
        ]);
    }
}
