<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter\Core;

interface NotificationInterface
{
    public function send(string $message): Notification;
}