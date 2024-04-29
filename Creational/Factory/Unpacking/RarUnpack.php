<?php

require_once __DIR__.'/../Interfaces/UnpackInterface.php';


class RarUnpack implements UnpackInterface
{
    public function unpackFile(): array
    {
        echo ("Rozpoczynam rozpakowanie plików z rar<br>");
        //Proces rozpakowywania
        $files = [];
        return $files;
    }
}