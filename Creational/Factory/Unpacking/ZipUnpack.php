<?php

require_once __DIR__.'/../Interfaces/UnpackInterface.php';


class ZipUnpack implements UnpackInterface
{
    public function unpackFile(): array
    {
        echo ("Rozpoczynam rozpakowanie plików z zip<br>");
        //Proces rozpakowywania
        $files = []; //lista plików
        return $files;
    }
}