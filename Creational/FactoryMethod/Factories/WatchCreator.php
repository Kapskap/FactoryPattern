<?php

require_once __DIR__.'/Creator.php';
require __DIR__.'/../Products/Watch.php';

class WatchCreator extends Creator
{
    public function CreateProduct(): IProduct
    {
        return new Watch();
    }
}