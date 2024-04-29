<?php

require __DIR__.'/TVPriceList.php';
require __DIR__.'/ComputersPriceList.php';
require __DIR__.'/NoDiscount.php';
require __DIR__.'/TenEuroDiscount.php';
require __DIR__.'/TwentyEuroDiscount.php';

echo "<b>Wzorzec most</b><br><br>";


$tvPriceList = new TVPriceList(new NoDiscount());
$price = $tvPriceList->CalculatePrice();
echo "Cena telewizoru, bez rabatu: $price euro.<br><br>";

$tvPriceList = new TVPriceList(new TenEuroDiscount());
$price = $tvPriceList->CalculatePrice();
echo "Cena telewizoru, z rabatem 10 euro: $price euro.<br><br>";

$tvPriceList = new TVPriceList(new TwentyEuroDiscount());
$price = $tvPriceList->CalculatePrice();
echo "Cena telewizoru, z rabatem 20 euro: $price euro.<br><br>";

//--------------------------------

$computerPriceList = new ComputersPriceList(new NoDiscount());
$price = $computerPriceList->CalculatePrice();
echo "Cena komputera, bez rabatu: $price euro.<br><br>";

$computerPriceList = new ComputersPriceList(new TenEuroDiscount());
$price = $computerPriceList->CalculatePrice();
echo "Cena komputera, z rabatem 10 euro: $price euro.<br><br>";

$computerPriceList = new ComputersPriceList(new TwentyEuroDiscount());
$price = $computerPriceList->CalculatePrice();
echo "Cena komputera, z rabatem 20 euro: $price euro.<br><br>";
