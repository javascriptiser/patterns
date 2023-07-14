<?php
declare(strict_types=1);

namespace DesignPatterns\AbstractFactory\Core;

interface GuiFactory
{
    public function createButton(): Button;
}