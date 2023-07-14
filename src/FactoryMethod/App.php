<?php
declare(strict_types=1);

namespace DesignPatterns\FactoryMethod;

use DesignPatterns\FactoryMethod\Core\Dialog;

class App
{
    private Dialog $dialog;

    public function __construct(Dialog $dialog)
    {
        $this->dialog = $dialog;
    }

    public function showMessage(string $message): string
    {
        return $this->dialog->createButton()->getMessage($message);
    }
}