<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\Core\WindowsUI;

use DesignPatterns\AbstractFactory\Core\Button;

class WindowsButton implements Button
{

    public function getMessage(string $message): string
    {
        return "Windows Button send message: $message";
    }
}