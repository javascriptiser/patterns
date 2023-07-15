<?php
declare(strict_types=1);

namespace DesignPatterns\Bridge\Core;

interface Device
{
    public function enable():string;
    public function disable():string;
    public function mute():string;
}