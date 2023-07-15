<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter\Adapters;

use DesignPatterns\Adapter\Api\LinkedinApi;
use DesignPatterns\Adapter\Core\Notification;
use DesignPatterns\Adapter\Core\NotificationInterface;

class LinkedinAdapter implements NotificationInterface
{
    private LinkedinApi $api;

    public function __construct(LinkedinApi $api)
    {
        $this->api = $api;
    }

    public function send(string $message): Notification
    {
        return new Notification($this->api->sendFromLinkedin($message));
    }
}