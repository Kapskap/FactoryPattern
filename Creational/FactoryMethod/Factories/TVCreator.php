<?php

require_once __DIR__.'/Creator.php';
require __DIR__.'/../Products/TV.php';

class TVCreator extends Creator
{
    public function CreateProduct(): IProduct
    {
        return new TV();
    }
}