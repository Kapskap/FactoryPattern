<?php

require_once __DIR__.'/Deliverer.php';

class DHLDeliverer implements Deliverer
{
    public function shipment(int $idReservation): void
    {
        echo "Wysyłka rezerwacji nr: $idReservation realizowana prz pomocy firmy DHL<br><hr>";
    }

}