<?php

declare(strict_types=1);


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
}