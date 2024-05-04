<?php

require_once __DIR__.'/IProduct.php';

class Watch implements IProduct
{
    public function Operation(): string
    {
        return "Operacja z klasy Zegarek";
    }
}