<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\Core\WindowsUI;

use DesignPatterns\AbstractFactory\Core\Button;
use DesignPatterns\AbstractFactory\Core\GuiFactory;

class WindowsUIFactory implements GuiFactory
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }
}