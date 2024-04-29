<?php

require __DIR__.'/../Interfaces/SaveInterface.php';


class SaveFile implements SaveInterface
{
    public function writeFiles(array $listFile)
    {
        echo ("Zapisuję rozpakowane pliki");
        //zapis plików na dysku
        
        return true;
    }
}