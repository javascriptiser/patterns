<?php
declare(strict_types=1);


use DesignPatterns\AbstractFactory\App;
use DesignPatterns\AbstractFactory\LinuxUI\LinuxUIFactory;
use DesignPatterns\AbstractFactory\WindowsUI\WindowsUIFactory;

echo "AbstractFactory design pattern </br>";

$factory = new WindowsUIFactory();
$app = new App($factory);

$app->showButtonMessage();

echo "</br>";

$factory = new LinuxUIFactory();
$app = new App($factory);

$app->showButtonMessage();