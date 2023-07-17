<?php
declare(strict_types=1);


use DesignPatterns\FlyWeight\App;


echo "</br>FlyWeight design pattern </br>";

//$app->createTreeNoFlyWeight();
//$app->createTreeWithFlyWeight();

$app = new App();
$startMemory = memory_get_usage();
for ($i = 0; $i < 25; $i++) {
    $randomString = "Not random";
//    $randomString = $i;
    $test = ["$randomString", "Color_1", "Texture_1", 1, 1];
    $app->createTreeWithFlyWeight(...$test);
}
$endMemory = memory_get_usage();
$memoryUsage = $endMemory - $startMemory;
echo "Общее использование памяти: " . $memoryUsage . " байт";//no random = 12880 byte, with random = 15256



