<?php
declare(strict_types=1);

namespace DesignPatterns\Bridge;

use DesignPatterns\Bridge\Remote\AdvancedRemote;
use DesignPatterns\Bridge\Remote\Remote;

class App
{

    public Remote $remote;

    public function __construct(AdvancedRemote $remote)
    {
        $this->remote = $remote;
    }
}