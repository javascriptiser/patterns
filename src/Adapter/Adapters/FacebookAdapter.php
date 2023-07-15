<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter\Adapters;

use DesignPatterns\Adapter\Api\FacebookApi;
use DesignPatterns\Adapter\Core\Notification;
use DesignPatterns\Adapter\Core\NotificationInterface;

class FacebookAdapter implements NotificationInterface
{
    private FacebookApi $api;

    public function __construct(FacebookApi $api)
    {
        $this->api = $api;
    }

    public function send(string $message): Notification
    {
        return new Notification($this->api->sendFromFacebook($message,"extra message facebook"));
    }
}