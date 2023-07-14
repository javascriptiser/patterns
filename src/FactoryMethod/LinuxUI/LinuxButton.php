<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\LinuxUI;

use DesignPatterns\FactoryMethod\Core\Button;

class LinuxButton implements Button
{
    public function getMessage(string $message): string
    {
        return "Linux Button send message $message";
    }
}