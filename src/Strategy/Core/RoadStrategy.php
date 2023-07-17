<?php
declare(strict_types=1);

namespace DesignPatterns\Strategy\Core;

class RoadStrategy implements Strategy
{

    public function buildRoad(): string
    {
        return "Road path";
    }
}