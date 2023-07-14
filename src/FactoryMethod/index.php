<?php
declare(strict_types=1);

use DesignPatterns\FactoryMethod\App;
use DesignPatterns\FactoryMethod\LinuxUI\LinuxDialog;
use DesignPatterns\FactoryMethod\WindowsUI\WindowsDialog;

echo "Factory method design pattern </br>";


$dialog = new WindowsDialog();
$app = new App($dialog);
echo $app->showMessage("Dialog");

echo "</br>";

$dialog = new LinuxDialog();
$app = new App($dialog);
echo $app->showMessage("Dialog");