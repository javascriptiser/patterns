<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\Core\LinuxUI;

use DesignPatterns\AbstractFactory\Core\Button;

class LinuxButton implements Button
{

    public function getMessage(string $message): string
    {
        return "Linux Button send message: $message";
    }
}