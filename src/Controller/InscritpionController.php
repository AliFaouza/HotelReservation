<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscritpionController extends AbstractController
{
    /**
     * @Route("/inscritpion", name="app_inscritpion")
     */
    public function index(): Response
    {
        return $this->render('inscritpion/inscription.html.twig', [
            'controller_name' => 'InscritpionController',
        ]);
    }
}
