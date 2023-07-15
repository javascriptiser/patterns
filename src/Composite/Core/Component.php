<?php
declare(strict_types=1);

namespace DesignPatterns\Composite\Core;

abstract class Component
{
    protected float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}