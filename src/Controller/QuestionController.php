<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    public function homepage()
    {
        return new Response('yo');
    }
    
    /**
     * @Route ("/annotation")
     * @return Response
     */
    public function sampleAnnotationAction(): Response
    {
        return new Response('yo from annotation');
    }
    
    /**
     * @Route ("/twig")
     * @return Response
     */
    public function sampleTwig(): Response
    {
        return $this->render('sample.html.twig');
    }
}