<?php

use function PHPUnit\Framework\throwException;

require __DIR__.'/Interfaces/PackerFactoryInterface.php';
require __DIR__.'/Handling/GetFile.php';
require __DIR__.'/Handling/SaveFile.php';
require __DIR__.'/Unpacking/7zUnpack.php';
require __DIR__.'/Unpacking/RarUnpack.php';
require __DIR__.'/Unpacking/ZipUnpack.php';

class PackerFactory implements PackerFactoryInterface
{
    public function createPacker(string $extension)
    {
        if ($extension === 'zip') {
            $unpack = new ZipUnpack();
            return $unpack->unpackFile();
        }
        else if ($extension === 'rar') {
            $unpack = new RarUnpack();
            return $unpack->unpackFile();
        }
        else if ($extension === '7z') {
            $unpack = new SevenzUnpack();
            return $unpack->unpackFile();
        }
        else{
            echo("Rozszerzenie nie jest obsługiwane");
            return [];
        }
    }

}

if ($_GET){
    $nameFile = $_GET['nameFile'];

    $extensionObject = new GetFile;
    $extension = $extensionObject->downloadFile($nameFile);
    $extension = $extension[1];

    $fileObject = new PackerFactory;
    $files = $fileObject->createPacker($extension);

    if ($files != NULL){
        $saveObject = new SaveFile();
        $succes = $saveObject->writeFiles($files);
    }   

}
else{
echo("Podaj nazwę pliku wraz z rozszerzeniem<br>");
echo("<form name=formFactory action='' method=get>");
echo("<input type=text name='nameFile'><br>");
echo("<input type=submit value=Wyślij>");
echo("</form>");
}