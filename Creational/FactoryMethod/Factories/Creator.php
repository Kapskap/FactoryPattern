<?php

abstract class Creator
{
    public abstract function CreateProduct(): IProduct;

    public function SomeOperation(): string
    {
         $product = $this->CreateProduct();
         $result = "Kod Kreatora: ".$product->Operation();
         return $result;
    }
}