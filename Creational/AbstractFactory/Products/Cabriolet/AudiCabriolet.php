<?php

require_once __DIR__.'/IAbstractCabriolet.php';

class AudiCabriolet implements IAbstractCabriolet
{
    public function FunctionWithCabriolet(): string
        {
            return "Metoda zwraca AudiCabriolet<br>";
        }
}