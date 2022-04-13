<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /** 
     * @Route("/", name="acceuil")
     */
    
    public function index(Request $request): Response
    {
     
        
        return $this->render('home/acceuil.html.twig', [
            'controller_name' => 'HomeController',

        ]);

    }
   
    
}


