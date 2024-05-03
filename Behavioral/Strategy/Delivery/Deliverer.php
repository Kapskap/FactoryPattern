<?php

interface Deliverer
{
    public function shipment(int $idReservation): void;
}