<?php

require_once __DIR__.'/IProduct.php';

class Computer implements IProduct
{
    public function Operation(): string
    {
        return "Operacja z klasy Komputer";
    }
}