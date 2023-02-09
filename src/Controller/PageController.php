<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Produits;
use App\Entity\User;
use Doctrine\ORM\Mapping\Id;

class PageController extends AbstractController
{
  private  $entityManager;
  public function __construct( EntityManagerInterface $entityManager)
 {
   $this->entityManager=$entityManager;    
 }
    /**
     * @Route("/", name="app_page")
     */
    public function index(): Response
    {    
        
     

    
        return $this->render('page/index.html.twig',[
       
         
          
        ]
          );
    }
   
     
}
