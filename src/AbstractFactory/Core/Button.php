<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\Core;

interface Button
{
    public function getMessage(string $message): string;
}