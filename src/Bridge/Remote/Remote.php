<?php
declare(strict_types=1);

namespace DesignPatterns\Bridge\Remote;

use DesignPatterns\Bridge\Core\Device;

class Remote
{
    protected Device $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function enable(): string
    {
        $device = get_class($this->device);
        return "Enable from $device: {$this->device->enable()}";
    }

    public function disable(): string
    {
        $device = get_class($this->device);
        return "Disable from $device: {$this->device->disable()}";
    }
}