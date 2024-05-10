<?php

require_once __DIR__.'/IAbstractSedan.php';

class AudiSedan implements IAbstractSedan
{
    public function FunctionWithSedan(): string
    {
        return "Metoda zwraca AudiSedan<br>";
    }

    public function AnotherFunctionWithSedan(IAbstractCombi $collaborator): string
    {
        $result = $collaborator->FunctionWithCombi();
        return "Wynik współpracy AudiSedan z $result<br>";
    }
}