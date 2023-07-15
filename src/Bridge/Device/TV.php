<?php
declare(strict_types=1);

namespace DesignPatterns\Bridge\Device;

use DesignPatterns\Bridge\Core\Device;

class TV implements Device
{
    public function enable(): string
    {
        return "TV is enabled";
    }

    public function disable(): string
    {
        return "TV is disabled";
    }

    public function mute(): string
    {
        return "TV is muted";
    }
}