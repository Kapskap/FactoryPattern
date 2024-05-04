<?php

require_once __DIR__.'/Creator.php';
require __DIR__.'/../Products/Computer.php';

class ComputerCreator extends Creator
{
    public function CreateProduct(): IProduct
    {
        return new Computer();
    }
}