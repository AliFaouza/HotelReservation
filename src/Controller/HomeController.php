<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Entity\Chambre;
use App\Entity\Client;
use App\Form\ChambreType;
use App\Form\ClientTyepType;
use App\Form\ReservationType;
use App\Form\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
       $this->entityManager=$entityManager; 
    }
    /** 
     * @Route("/", name="acceuil")
     */
    
    public function index(Request $request): Response
    {
       $reserve=new Reservation; 
        $formReserve=$this->createForm(ReservationType::class,$reserve);

        $chambre=new Chambre;
        $formchambre=$this->createForm(ChambreType::class,$chambre);
         
        $client=new Client;
        $formclient=$this->createForm(ClientTyepType::class,$client);
        
        if( $formclient->isSubmitted() &&  $formclient->isValid()){
           // $reserve->setDateArrivee($formReserve->getdata()->getDateArrivee());
           // $reserve->setDateDepart($formReserve->getdata()->getDateDepart());
            //$reserve->setMotif($formReserve->getdata()->getMotif());
            //$reserve->setNombreAdulte($formReserve->getdata()->getNombreAdulte());
            //$reserve->setNombreEnfant($formReserve->getdata()->geNombreEnfant());
            
            //$chambre->setNombre($formchambre->getData()->getNombre());
            //$chambre->setPrix($formchambre->getData()->getPrix());
            //$chambre->setTypechambre($formchambre->getData()->gettTypechambre());
          
            $client->setNom($formclient->getData()->getNom());
            $client->setPrenom($formclient->getData()->getPrenom());
            $client->setEmail($formclient->getData()->getEmail());
            $client->setSex($formclient->getData()->getSex());
            $client->setTel($formclient->getData()->getTel());
            
            //dd($reserve);
            dd($client);
            //dd($chambre);
            //$this->entityManager->persist( $reserve);
            //$this->entityManager->flush();
        
        } 
        return $this->render('home/acceuil.html.twig', [
            'formReservation'=>$formReserve->createView(),
            'formChambre'=>$formchambre->createView(),
            'formClient'=>$formclient->createView()
        ]);

    }
   
    
}


