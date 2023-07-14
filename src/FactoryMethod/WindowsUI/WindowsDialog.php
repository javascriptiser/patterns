<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\WindowsUI;

use DesignPatterns\FactoryMethod\Core\Button;
use DesignPatterns\FactoryMethod\Core\Dialog;

class WindowsDialog implements Dialog
{

    public function createButton(): Button
    {
        return new WindowsButton();
    }
}