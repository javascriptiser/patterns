<?php
declare(strict_types=1);

namespace DesignPatterns\Decorator\Button;

interface ButtonInterface
{
    public function onClick(): string;
}