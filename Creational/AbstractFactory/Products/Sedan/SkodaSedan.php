<?php

require_once __DIR__.'/IAbstractSedan.php';

class SkodaSedan implements IAbstractSedan
{
    public function FunctionWithSedan(): string
    {
        return "Metoda zwraca SkodaSedan<br>";
    }

    public function AnotherFunctionWithSedan(IAbstractCombi $collaborator): string
    {
        $result = $collaborator->FunctionWithCombi();
        return "Wynik współpracy SkodaSedan z $result<br>";
    }
}