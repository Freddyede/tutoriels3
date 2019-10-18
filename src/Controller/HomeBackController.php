<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeBackController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="home_back")
     */
    public function index()
    {
        return $this->render('BACK/home/index.html.twig', [
            'controller_name' => 'HomeBackController',
        ]);
    }
}
