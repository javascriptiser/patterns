<?php
declare(strict_types=1);

namespace DesignPatterns\FlyWeight\Core;


class TreeType
{
    public string $name;
    public string $color;
    public string $texture;

    public function __construct(string $name, string $color, string $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }
}