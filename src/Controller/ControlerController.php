<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ControlerController extends AbstractController
{
    #[Route('/controler', name: 'app_controler')]
    public function index(): Response
    {
        return $this->render('controler/index.html.twig', [
            'controller_name' => 'ControlerController',
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('controler/home.html.twig', [
            'title' => "bienvenue",
            'age' => 31
        ]);
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('controler/portfolio.html.twig', [
            'title' => "Portfolio"
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('controler/cv.html.twig', [
            'title' => "CV"
        ]);
    }

    #[Route('/passion', name: 'app_passion')]
    public function passion(): Response
    {
        return $this->render('controler/passion.html.twig', [
            'title' => "Passions"
        ]);
    }
}