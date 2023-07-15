<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter;


use DesignPatterns\Adapter\Core\Notification;
use DesignPatterns\Adapter\Core\NotificationInterface;

class App
{
    public Notification $notification;

    public function __construct(NotificationInterface $sender, string $message)
    {
        $this->notification = $sender->send($message);
    }

}