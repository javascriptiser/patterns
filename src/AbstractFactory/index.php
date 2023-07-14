<?php
declare(strict_types=1);


use DesignPatterns\AbstractFactory\App;
use DesignPatterns\AbstractFactory\Core\LinuxUI\LinuxUIFactory;
use DesignPatterns\AbstractFactory\Core\WindowsUI\WindowsUIFactory;

echo "AbstractFactory design pattern </br>";

$factory = new WindowsUIFactory();
$app = new App($factory);

$app->showButtonMessage();

echo "</br>";

$factory = new LinuxUIFactory();
$app = new App($factory);

$app->showButtonMessage();