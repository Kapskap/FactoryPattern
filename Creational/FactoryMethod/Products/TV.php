<?php

require_once __DIR__.'/IProduct.php';

class TV implements IProduct
{
    public function Operation(): string
    {
        return "Operacja z klasy Telewizor";
    }
}