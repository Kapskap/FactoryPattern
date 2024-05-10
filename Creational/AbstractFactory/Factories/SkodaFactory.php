<?php

require __DIR__.'/../Products/Cabriolet/SkodaCabriolet.php';
require __DIR__.'/../Products/Combi/SkodaCombi.php';
require __DIR__.'/../Products/Hatchback/SkodaHatchback.php';
require __DIR__.'/../Products/Sedan/SkodaSedan.php';

class SkodaFactory implements IAbstractFactory
{
    public function CreateCabriolet()
    {
        return new SkodaCabriolet();
    }

    public function CreateCombi()
    {
        return new SkodaCombi();
    }

    public function CreateHatchback()
    {
        return new SkodaHatchback();
    }

    public function CreateSedan()
    {
        return new SkodaSedan();
    }
}