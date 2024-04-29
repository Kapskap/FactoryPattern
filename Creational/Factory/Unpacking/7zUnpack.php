<?php

require_once __DIR__.'/../Interfaces/UnpackInterface.php';


class SevenzUnpack implements UnpackInterface
{
    public function unpackFile(): array
    {
        echo ("Rozpoczynam rozpakowanie plików<br z 7z>");
        //Proces rozpakowywania
        $files = [];
        return $files;
    }
}