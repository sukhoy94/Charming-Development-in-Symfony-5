<?php

declare(strict_types=1);


namespace App\Message;


use App\Entity\LogMessage;

class LogTextToFile
{
    private LogMessage $message;
    
    public function __construct(LogMessage $message)
    {
        $this->message = $message;
    }
    
    public function getText(): string
    {
        return $this->message->getMessage();        
    }
}