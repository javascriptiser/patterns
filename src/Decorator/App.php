<?php
declare(strict_types=1);

namespace DesignPatterns\Decorator;

use DesignPatterns\Decorator\Button\ButtonInterface;

class App
{
    private ButtonInterface $button;

    public function __construct(ButtonInterface $button)
    {
        $this->button = $button;
    }

    public function bootstrap()
    {
        echo $this->button->onClick();
    }
}