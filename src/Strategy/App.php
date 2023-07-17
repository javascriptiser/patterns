<?php
declare(strict_types=1);

namespace DesignPatterns\Strategy;

use DesignPatterns\Strategy\Core\Strategy;

class App
{
    public Strategy $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }
}