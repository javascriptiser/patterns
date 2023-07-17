<?php
declare(strict_types=1);


use DesignPatterns\Decorator\App;
use DesignPatterns\Decorator\Button\Button;
use DesignPatterns\Decorator\Decorator\DatabaseLoggerDecorator;
use DesignPatterns\Decorator\Decorator\FileLoggerDecorator;

echo "Decorator design pattern </br>";

$button = new Button();
$button = new DatabaseLoggerDecorator($button);
$button = new FileLoggerDecorator($button);


$app = new App($button);

$app->bootstrap();
