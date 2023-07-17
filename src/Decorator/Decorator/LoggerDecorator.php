<?php
declare(strict_types=1);

namespace DesignPatterns\Decorator\Decorator;

use DesignPatterns\Decorator\Button\ButtonInterface;

abstract class LoggerDecorator implements ButtonInterface
{
    protected ButtonInterface $button;

    public function __construct(ButtonInterface $button)
    {
        $this->button = $button;
    }

    public function onClick(): string
    {
        return $this->button->onClick();
    }

}