<?php
declare(strict_types=1);


use DesignPatterns\Composite\Core\Composite;
use DesignPatterns\Composite\Core\FreeCostIngredient;
use DesignPatterns\Composite\Core\Ingredient;

echo "Composite method design pattern </br>";

$ingredient_1 = new Ingredient(1);
$ingredient_2 = new Ingredient(2);
$ingredient_3 = new FreeCostIngredient();

$pizza = new Composite();
$pizza->add($ingredient_1);
$pizza->add($ingredient_2);
$pizza->add($ingredient_3);


$pizza2 = new Composite();
$pizza2->add($ingredient_1);

$order = new Composite(0);
$order->add($pizza);
$order->add($pizza2);

echo $order->getPrice();

