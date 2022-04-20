<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Client;
use App\Form\InscriptionType;
use Symfony\Component\Security\Core\Encoder;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\ORM\EntityManagerInterface;

class InscritpionController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
       $this->entityManager=$entityManager; 
    }
    /**
     * @Route("/inscritpion", name="app_inscritpion")
     */
    public function inscription(Request $request, UserPasswordEncoderInterface $encoder ): Response
    {
        $client=new Client();
        $formInscription=$this->createForm(InscriptionType::class, $client);
        
        $formInscription->handleRequest($request);

        if($formInscription->isSubmitted() && $formInscription->isValid()){
            $client=$formInscription->getData();
           

          
            $hash=$encoder->encodePassword($client, $client->getMotdpass());
            $client->setMotdpass($hash);
            
            $this->entityManager->persist($client);
            $this->entityManager->flush();
        
        } 
        
        return $this->render('inscritpion/inscription.html.twig', [
            'formInscription' => $formInscription->createView()
        ]);
    }
}
