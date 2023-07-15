<?php
declare(strict_types=1);

namespace DesignPatterns\Bridge\Remote;


class AdvancedRemote extends Remote
{
    public function mute():string
    {
        $device = get_class($this->device);
        return "Muted from $device: {$this->device->mute()}";
    }
}