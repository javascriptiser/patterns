<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\LinuxUI;

use DesignPatterns\AbstractFactory\Core\Button;
use DesignPatterns\AbstractFactory\Core\GuiFactory;

class LinuxUIFactory implements GuiFactory
{

    public function createButton(): Button
    {
        return new LinuxButton();
    }
}