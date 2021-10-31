<?php

declare(strict_types=1);


namespace App\Controller;


use App\Entity\LogMessage;
use App\Message\LogTextToFile;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    public function homepage(MessageBusInterface $messageBus, LoggerInterface $logger)
    {
        $lm = new LogMessage();
        $lm->setMessage('My message');
    
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($lm);
        $entityManager->flush();
        
//        $logHello = new LogTextToFile('hello ' . (new \DateTime())->format('Y-m-d H:i:s'));
//        $messageBus->dispatch($logHello);
//        
        return new Response('Welcome');
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
        
        return $this->render('sample.html.twig', [
            'variable' => 'Lorem **ipsum**',
        ]);
    }
}