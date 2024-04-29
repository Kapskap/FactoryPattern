<?php

require __DIR__.'/Builder/MargheritaPizzaBuilder.php';
require __DIR__.'/Builder/CapriciosaPizzaBuilder.php';
require __DIR__.'/Director/PizzaMaker.php';
require __DIR__.'/Product/Pizza.php';
require __DIR__.'/Product/Cake.php';
require __DIR__.'/Product/Cheese.php';
require __DIR__.'/Product/Condiment.php';
require __DIR__.'/Product/Meat.php';
require __DIR__.'/Product/Vegetable.php';

echo "<b>Wzorzec budowniczy</b><br><br>";

$name = 'Margherita';
$pizzaBuilder = new MargheritaPizzaBuilder();
$newPizza = (new PizzaMaker())->build($pizzaBuilder, $name);

$name = 'Capriciosa';
$pizzaBuilder = new CapriciosaPizzaBuilder();
$newPizza = (new PizzaMaker())->build($pizzaBuilder, $name);

