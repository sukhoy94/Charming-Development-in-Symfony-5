<?php

declare(strict_types=1);


namespace App\MessageHandler;


use App\Entity\LogMessage;
use App\Message\LogTextToFile;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class LogTextToFileHandler implements MessageHandlerInterface
{
    private LoggerInterface $logger;
    private EntityManagerInterface $em;
    
    public function __construct(LoggerInterface $logger, EntityManagerInterface $em)
    {
        $this->logger = $logger;
        $this->em = $em;
    }
    
    public function __invoke(LogTextToFile $logTextToFile)
    {
        $lm = new LogMessage();
        $lm->setMessage($logTextToFile->getText());
        
        $this->em->persist($lm);
        $this->em->flush();
    }
}