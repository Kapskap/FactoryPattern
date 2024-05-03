<?php

require __DIR__.'/Purchase.php';
require __DIR__.'/Delivery/InpostDeliverer.php';
require __DIR__.'/Delivery/PostDeliverer.php';
require __DIR__.'/Delivery/DHLDeliverer.php';

echo "<b>Wzorzec strategia</b><br><br>";

$products = array('Koszula', 'Spodnie', 'Buty', 'Pasek');
$purchase = new Purchase(new InpostDeliverer());
$idReservation = $purchase->reservation($products);
$delivery = $purchase->courierTransfer($idReservation);

$products = array('Mysz', 'Monitor');
$purchase = new Purchase(new PostDeliverer());
$idReservation = $purchase->reservation($products);
$delivery = $purchase->courierTransfer($idReservation);

$products = array('Książka', 'Piórnik', 'Plecak');
$purchase = new Purchase(new DHLDeliverer());
$idReservation = $purchase->reservation($products);
$delivery = $purchase->courierTransfer($idReservation);