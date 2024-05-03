<?php

class Purchase
{
    public function __construct(Deliverer $deliverer)
    {
        $this->deliverer = $deliverer;
    }

    public function reservation(array $products): int
    {
        $idReservation = random_int(1, 1000);
        echo "<br>Dokonano rezerwacji o nr: $idReservation na produkty:";
        echo "<ul>";
;        foreach ($products as $product){
            echo "<li>".$product;
        }
        echo "</ul>";

        return $idReservation;
    }

    public function courierTransfer(int $idReservation)
    {
        $this->deliverer->shipment($idReservation);
    }

}