<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\LinuxUI;

use DesignPatterns\FactoryMethod\Core\Button;
use DesignPatterns\FactoryMethod\Core\Dialog;

class LinuxDialog implements Dialog
{

    public function createButton(): Button
    {
        return new LinuxButton();
    }
}