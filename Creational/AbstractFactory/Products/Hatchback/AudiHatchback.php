<?php

require_once __DIR__.'/IAbstractHatchback.php';

class AudiHatchback implements IAbstractHatchback
{
    public function FunctionWithHatchback(): string
        {
            return "Metoda zwraca AudiHatchback<br>";
        }
}