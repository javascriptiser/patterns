<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod\Core;

interface Dialog
{
    public function createButton(): Button;
}