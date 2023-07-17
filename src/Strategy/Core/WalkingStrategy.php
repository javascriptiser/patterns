<?php
declare(strict_types=1);

namespace DesignPatterns\Strategy\Core;

class WalkingStrategy implements Strategy
{

    public function buildRoad(): string
    {
        return "Walking path";
    }
}