<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\WindowsUI;

use DesignPatterns\FactoryMethod\Core\Button;

class WindowsButton implements Button
{

    public function getMessage(string $message): string
    {
        return "Windows Button send message $message";
    }
}