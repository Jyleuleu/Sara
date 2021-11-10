<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {
    
    /**
     * @Route("/hello/{slug}", name="hello")
     * 
     */
    function hello($slug) {
        return $this->render('hello.html.twig', ['name' => $slug]);
    }
}