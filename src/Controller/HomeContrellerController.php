<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeContrellerController extends AbstractController
{
    #[Route('/', name: 'home.index',methods:['GET'])]
    public function index(): Response
    {
        return $this->render('home_contreller/index.html.twig');
            
    }
}
