<?php
declare(strict_types=1);

namespace DesignPatterns\Decorator\Decorator;

class FileLoggerDecorator extends LoggerDecorator
{
    public function onClick(): string
    {
        echo "Log in file ";
        return parent::onClick();
    }
}