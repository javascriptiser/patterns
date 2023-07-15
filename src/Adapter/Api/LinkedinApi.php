<?php
declare(strict_types=1);

namespace DesignPatterns\Adapter\Api;

class LinkedinApi
{
    public function sendFromLinkedin(string $message): string
    {
        return $message;
    }
}