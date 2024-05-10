<?php

require_once __DIR__.'/IAbstractHatchback.php';

class SkodaHatchback implements IAbstractHatchback
{
    public function FunctionWithHatchback(): string
    {
        return "Metoda zwraca SkodaHatchback<br>";
    }
}