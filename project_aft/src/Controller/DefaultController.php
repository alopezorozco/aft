<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class DefaultController extends AbstractController
{
    /**
     *@Route("/", name="homepage")
     */
    public function index(){
        return $this->render('htdocs/index.html.twig');
    }
}//fin de la Clase
?>