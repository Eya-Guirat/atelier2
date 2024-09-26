<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class Service3A36Controller extends AbstractController
{


    #[Route('/service3/a36', name: 'app_service3_a36')]
    public function index(): Response
    {
        
        $person = array(array('id'=>'1','name'=>'test')); //table d'objet

        //table multi
        $auth = array(
            array('id' => 1, 'picture' => '/images/flower.jpg', 'username' => 'victor')
        );
        //

        return $this->render('service3_a36/index.html.twig', [

            'p' => '3A36', 
            'tab'=>$person, //tale wehed
            'eya' => $auth //table multi


        ]);
    }


}
