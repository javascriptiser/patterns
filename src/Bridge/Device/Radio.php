<?php
declare(strict_types=1);

namespace DesignPatterns\Bridge\Device;

use DesignPatterns\Bridge\Core\Device;

class Radio implements Device
{

    public function enable(): string
    {
        return "Radio is enabled";
    }

    public function disable(): string
    {
        return "Radio is disabled";
    }
    public function mute(): string
    {
        return "Radio is muted";
    }
}