<?php
/**
 * Created by PhpStorm.
 * User: alopezorozco
 * Date: 10/09/2019
 * Time: 10:46 PM
 */
namespace App\Controller\Categorias;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class CategoriaController extends AbstractController
{
    /**
     * @Route("/categorias", name="categoria_homepage")
     */
    public function index(){
        return $this->render('htdocs/categorias/index.html.twig');
    }
}