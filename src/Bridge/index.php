<?php
declare(strict_types=1);


use DesignPatterns\Bridge\App;
use DesignPatterns\Bridge\Device\Radio;
use DesignPatterns\Bridge\Device\TV;
use DesignPatterns\Bridge\Remote\AdvancedRemote;

echo "Bridge method design pattern </br>";


$device = new Radio();
$remote = new AdvancedRemote($device);

$app = new App($remote);

echo $app->remote->enable() . "</br>";
echo $app->remote->disable() . "</br>";

$device = new TV();
$remote = new AdvancedRemote($device);

$app = new App($remote);

echo $app->remote->enable() . "</br>";
echo $app->remote->disable() . "</br>";
echo $app->remote->mute(). "</br>";

