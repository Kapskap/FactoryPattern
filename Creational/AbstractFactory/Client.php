<?php

require __DIR__.'/Factories/IAbstractFactory.php';
require __DIR__.'/Factories/SkodaFactory.php';
require __DIR__.'/Factories/AudiFactory.php';

class Client
{
    public function Main(): void
        {
            echo "Klient: Testowanie kodu klienta z pierwszym typem fabryki:<br>";
            $this->ClientMethod(new AudiFactory());
            echo "<br>";

            echo "Klient: Testowanie tego samego kodu klienta z drugim typem fabryki:<br>";
            $this->ClientMethod(new SkodaFactory());
            echo "<br>";
        }

    public function ClientMethod(IAbstractFactory $factory): void
        {
            $cabriolet = $factory->CreateCabriolet();
            $combi = $factory->CreateCombi();
            $hatchback = $factory->CreateHatchback();
            $sedan = $factory->CreateSedan();

            echo $cabriolet->FunctionWithCabriolet();
            echo $combi->FunctionWithCombi();
            echo $hatchback->FunctionWithHatchback();

            echo $sedan->FunctionWithSedan();
            echo $sedan->AnotherFunctionWithSedan($combi);
        }
}
