<?php

require __DIR__.'/Factories/TVCreator.php';
require __DIR__.'/Factories/ComputerCreator.php';
require __DIR__.'/Factories/WatchCreator.php';
class Client
{
    public function Main()
        {
            echo "Aplikacja: uruchomiona z TVCreator.";
            $this->ClientCode(new TVCreator());
            echo "<br><hr>";

            echo "Aplikacja: uruchomiona z ComputerCreator.";
            $this->ClientCode(new ComputerCreator());
            echo "<br><hr>";

            echo "Aplikacja: uruchomiona z WatchCreator.";
            $this->ClientCode(new WatchCreator());
            echo "<br><hr>";
        }

        private function ClientCode(Creator $creator): void
        {
            echo "<br>Kod Klienta: Nie znam klasy twórcy i nadal pracuje.<br>";
            echo $creator->SomeOperation();
        }
}