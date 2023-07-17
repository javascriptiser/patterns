<?php
declare(strict_types=1);


use DesignPatterns\Strategy\App;
use DesignPatterns\Strategy\Core\PublicTransportStrategy;
use DesignPatterns\Strategy\Core\RoadStrategy;
use DesignPatterns\Strategy\Core\WalkingStrategy;

echo "</br>Strategy design pattern </br>";


$strategy = new RoadStrategy();
$app = new App($strategy);
echo $app->strategy->buildRoad() . " ";

$strategy = new WalkingStrategy();
$app = new App($strategy);
echo $app->strategy->buildRoad() . " ";

$strategy = new PublicTransportStrategy();
$app = new App($strategy);
echo $app->strategy->buildRoad() . " ";
