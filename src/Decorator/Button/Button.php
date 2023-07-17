<?php
declare(strict_types=1);

namespace DesignPatterns\Decorator\Button;

class Button implements ButtonInterface
{

    public function onClick(): string
    {
        return "clicked ";
    }
}