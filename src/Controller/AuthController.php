<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AuthController extends AbstractController {


    #[Route("/login", name:"home")]
    public function loginAction(): Response {
        return new Response("Hello");
    }

    
    #[Route("/login/{id}", name:"home00")]
    public function loginActionParam($id): Response {
        return new Response("Hello Route Param ".$id);
    }


    #[Route("/login/User", name:"home1")]
    public function loginActionNomParam(): Response {
        return new Response("Hello Route Param , C'est un test ");
    }

   
}
