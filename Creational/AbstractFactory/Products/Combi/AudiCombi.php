<?php

require_once __DIR__.'/IAbstractCombi.php';
class AudiCombi implements IAbstractCombi
{
    public function FunctionWithCombi(): string
    {
            return "Metoda zwraca AudiCombi<br>";
    }
}