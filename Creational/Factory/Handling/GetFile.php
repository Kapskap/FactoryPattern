<?php

require __DIR__.'/../Interfaces/GetInterface.php';


class GetFile implements GetInterface
{
    public function downloadFile($nameFile): array
    {
        echo ("Pobieram dane z pliku $nameFile<br>");
        $File = explode(".", $nameFile);
        //Pobieranie danych z pliku
        return $File;
    }
}