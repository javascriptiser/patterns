<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory;

use DesignPatterns\AbstractFactory\Core\Button;
use DesignPatterns\AbstractFactory\Core\GuiFactory;

class App
{
    private GuiFactory $factory;
    private Button $button;

    public function __construct(GuiFactory $factory)
    {
        $this->factory = $factory;
        $this->button = $this->factory->createButton();
    }

    public function showButtonMessage(): void
    {
        echo $this->button->getMessage("Message");
    }
}