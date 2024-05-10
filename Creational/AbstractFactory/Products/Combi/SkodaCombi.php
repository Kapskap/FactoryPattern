<?php

require_once __DIR__.'/IAbstractCombi.php';

class SkodaCombi implements IAbstractCombi
{
    public function FunctionWithCombi(): string
    {
        return "Metoda zwraca SkodaCombi<br>";
    }
}