<?php

declare(strict_types=1);


namespace App\MessageHandler;


use App\Message\LogTextToFile;
use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class LogTextToFileHandler implements MessageHandlerInterface
{
    private LoggerInterface $logger;
    
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function __invoke(LogTextToFile $logTextToFile)
    {
        $this->logger->info($logTextToFile->getText());
    }
}