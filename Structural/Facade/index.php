<?php

require __DIR__.'/MortgageFacade.php';
require __DIR__.'/Customer.php';

echo "<b>Wzorzec Fasada</b><br><br>";

$customer = new Customer("Adam Nowak", 100000);
$mortgage = new MortgageFacade($customer);

$eligible = $mortgage->IsEligible($customer);
echo "<br><br>Kredyt dla ".$customer->getName()." został ".($eligible ? "<b>zatwierdzony</b>" : "<b>odrzucony</b>");