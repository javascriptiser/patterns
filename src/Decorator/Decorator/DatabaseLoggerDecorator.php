<?php
declare(strict_types=1);

namespace DesignPatterns\Decorator\Decorator;

class DatabaseLoggerDecorator extends LoggerDecorator
{
    public function onClick(): string
    {
        echo "Log in database ";
        return parent::onClick();
    }
}