<?php

namespace App\Controller;
use App\Entity\Productos;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddController extends AbstractController
{
    /**
     * @Route("/add", name="add")
     */
    public function index(EntityManagerInterface $entityManager)
    {
        foreach($this->listado['contenido'] as $key => $value){
           
            $Producto=new Productos();
            $Producto->setImg($value['img']);
            isset($value['mensaje']) ? $Producto->setMensaje($value['mensaje']) : "";
            $Producto->setTitle($value['title']);
            $Producto->setDescription($value['description']);
            $Producto->setTitle2($value['title2']);
            $Producto->setDate(new \Datetime($this->cambiaFormato($value['date'])));
            $Producto->setComments($value['comments']);
            $Producto->setCreateby($value['createby']);

                $entityManager->persist($Producto);  
        }
            $entityManager->flush();

        return $this->render('add/index.html.twig', [
            'controller_name' => 'AddController',
        ]);
    }
    //funcion para cambiar el formato de la fecha.
    private function cambiaFormato($fecha){
        $fecha=str_replace(",", "", $fecha);
        $fecha_array =explode(" ", $fecha);
        $mes=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];
        return $fecha_array[2] ."-". (array_search($fecha_array[0],$mes)+1) ."-". $fecha_array[1]; 
    }
    private $listado=[
        "contenido" => 
          [
              [
                  'img' => 'img-01.jpg',
                  'mensaje' => 'New Product',
                  'title' => 'Simple and useful HTML layout',
                  'description' => 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.',
                  'title2' => 'Travel . Events',
                  'date' =>'June 24, 2020',/* (año mes dia) */
                  'comments'=> '36 comments',
                  'createby'=> 'by Admin Nat',
              ],
              [
                  'img' => 'img-02.jpg',
                  'mensaje' => 'New Product',
                  'title' => 'Multi-purpose blog template',
                  'description' => 'is a multi-purpose HTML CSS template from TemplateMo website. 
                  Blog list, single post, about, contact pages are included. Left sidebar fixed width and content area is a fluid full-width.',
                  'title2' => 'Creative . Design . Business',
                  'date' =>'June 16, 2020',
                  'comments'=> '48 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'img-03.jpg',
                  'title' => 'How can you apply Xtra Blog',
                  'description' => 'You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. 
                  You can also use this for your clients. Thank you for choosing us.',
                  'title2' => 'Music . Audio',
                  'date' =>'June 11, 2020',
                  'comments'=> '24 comments',
                  'createby'=> 'by John Walker',
              ],
              [
                  'img' => 'img-04.jpg',
                  'title' => 'A little restriction to apply',
                  'description' => ' You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection
                  website. This is strongly prohibited as we worked hard for this template. Please contact TemplateMo for more information.',
                  'title2' => 'Artworks . Design',
                  'date' =>'June 4, 2020',
                  'comments'=> '72 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'img-05.jpg',
                  'title' => 'Color hexa values of Xtra Blog',
                  'description' => ' If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.',
                  'title2' => 'Creative . Video . Audio ',
                  'date' =>'May 31, 2020',
                  'comments'=> '84 comments',
                  'createby'=> 'by Admin Sam',
              ],  
              [
                  'img' => 'img-06.jpg',
                  'title' => 'Donec convallis varius risus',
                  'description' => 'Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor consectetur luctus.',
                  'title2' => 'Visual . Artworks',
                  'date' =>'June 16, 2020',
                  'comments'=> '96 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'party.jpg',
                  'mensaje' => 'New Product',
                  'title' => 'Simple and useful HTML layout2',
                  'description' => 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.',
                  'title2' => 'Travel . Events',
                  'date' =>'June 24, 2020',
                  'comments'=> '36 comments',
                  'createby'=> 'by Admin Nat',
              ],
              [
                  'img' => 'Partycolors.jpg',
                  'mensaje' => 'New Product',
                  'title' => 'Multi-purpose blog template',
                  'description' => 'is a multi-purpose HTML CSS template from TemplateMo website. 
                  Blog list, single post, about, contact pages are included. Left sidebar fixed width and content area is a fluid full-width.',
                  'title2' => 'Creative . Design . Business',
                  'date' =>'June 16, 2020',
                  'comments'=> '48 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'pez.jpg',
                  'title' => 'How can you apply Xtra Blog',
                  'description' => 'You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. 
                  You can also use this for your clients. Thank you for choosing us.',
                  'title2' => 'Music . Audio',
                  'date' =>'June 11, 2020',
                  'comments'=> '24 comments',
                  'createby'=> 'by John Walker',
              ],
              [
                  'img' => 'TV.jpg',
                  'title' => 'A little restriction to apply',
                  'description' => ' You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection
                  website. This is strongly prohibited as we worked hard for this template. Please contact TemplateMo for more information.',
                  'title2' => 'Artworks . Design',
                  'date' =>'June 4, 2020',
                  'comments'=> '72 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'atardecer.jpg',
                  'title' => 'Color hexa values of Xtra Blog',
                  'description' => ' If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.',
                  'title2' => 'Creative . Video . Audio ',
                  'date' =>'May 31, 2020',
                  'comments'=> '84 comments',
                  'createby'=> 'by Admin Sam',
              ], 
              [
                  'img' => 'cara.jpg',
                  'title' => 'Donec convallis varius risus',
                  'description' => 'Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor consectetur luctus.',
                  'title2' => 'Visual . Artworks',
                  'date' =>'June 16, 2020',
                  'comments'=> '96 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'flor.jpg',
                  'mensaje' => 'New Product',
                  'title' => 'Simple and useful HTML layout3',
                  'description' => 'There is a clickable image with beautiful hover effect and active title link for each post item. Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.',
                  'title2' => 'Travel . Events',
                  'date' =>'June 24, 2020',
                  'comments'=> '36 comments',
                  'createby'=> 'by Admin Nat',
              ],
              [
                  'img' => 'agua.jpg',
                  'mensaje' => 'New Product',
                  'title' => 'Multi-purpose blog template',
                  'description' => 'is a multi-purpose HTML CSS template from TemplateMo website. 
                  Blog list, single post, about, contact pages are included. Left sidebar fixed width and content area is a fluid full-width.',
                  'title2' => 'Creative . Design . Business',
                  'date' =>'June 16, 2020',
                  'comments'=> '48 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'gospel.jpg',
                  'title' => 'How can you apply Xtra Blog',
                  'description' => 'You are <u>allowed</u> to convert this template as any kind of CMS theme or template for your custom website builder. 
                  You can also use this for your clients. Thank you for choosing us.',
                  'title2' => 'Music . Audio',
                  'date' =>'June 11, 2020',
                  'comments'=> '24 comments',
                  'createby'=> 'by John Walker',
              ],
              [
                  'img' => 'luna.jpg',
                  'title' => 'A little restriction to apply',
                  'description' => ' You are <u>not allowed</u> to re-distribute this template as a downloadable ZIP file on any template collection
                  website. This is strongly prohibited as we worked hard for this template. Please contact TemplateMo for more information.',
                  'title2' => 'Artworks . Design',
                  'date' =>'June 4, 2020',
                  'comments'=> '72 comments',
                  'createby'=> 'by Admin Sam',
              ],
              [
                  'img' => 'playa.jpg',
                  'title' => 'Color hexa values of Xtra Blog',
                  'description' => ' If you wish to kindly support us, please contact us or contribute a small PayPal amount to info [at] templatemo.com that is helpful for us.',
                  'title2' => 'Creative . Video . Audio ',
                  'date' =>'May 31, 2020',
                  'comments'=> '84 comments',
                  'createby'=> 'by Admin Sam',
              ], 
              [
                  'img' => 'paisaje.jpg',
                  'title' => 'Donec convallis varius risus',
                  'description' => 'Quisque id ipsum vel sem maximus vulputate sed quis velit. Nunc vel turpis eget orci elementum cursus vitae in eros. Quisque vulputate nulla ut dolor consectetur luctus.',
                  'title2' => 'Visual . Artworks',
                  'date' =>'June 16, 2020',
                  'comments'=> '96 comments',
                  'createby'=> 'by Admin Sam',
              ],
          ]    
      ];
}
