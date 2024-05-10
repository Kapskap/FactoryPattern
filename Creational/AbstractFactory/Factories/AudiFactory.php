<?php

require __DIR__.'/../Products/Cabriolet/AudiCabriolet.php';
require __DIR__.'/../Products/Combi/AudiCombi.php';
require __DIR__.'/../Products/Hatchback/AudiHatchback.php';
require __DIR__.'/../Products/Sedan/AudiSedan.php';

class AudiFactory implements IAbstractFactory
{
    public function CreateCabriolet()
        {
            return new AudiCabriolet();
        }

        public function CreateCombi()
        {
            return new AudiCombi();
        }

        public function CreateHatchback()
        {
            return new AudiHatchback();
        }

        public function CreateSedan()
        {
            return new AudiSedan();
        }
}