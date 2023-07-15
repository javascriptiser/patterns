<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter\Api;

class FacebookApi
{
    public function sendFromFacebook(string $message,string $extra_message): string
    {
        return $message . " " .  $extra_message;
    }
}