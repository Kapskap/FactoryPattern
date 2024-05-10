<?php
require_once __DIR__.'/IAbstractCabriolet.php';

class SkodaCabriolet implements IAbstractCabriolet
{
    public function FunctionWithCabriolet(): string
    {
        return "Metoda zwraca SkodaCabriolet<br>";
    }
}