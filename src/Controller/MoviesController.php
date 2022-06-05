<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
        return $this->render('movies/index.html.twig', [
            'controller_name' => 'MoviesController',
        ]);
    }
    
    #[Route('/movies/{id}', name: 'app_single_movie')]
    public function singleMovie(): Response
    {
        return $this->json([
            'id' => 1
        ]);
    }
}
