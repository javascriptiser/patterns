<?php
declare(strict_types=1);

namespace DesignPatterns\Strategy\Core;

class PublicTransportStrategy implements Strategy
{

    public function buildRoad(): string
    {
        return "Public Transport path";
    }
}