<?php

abstract class Person
{
    public $clone = NULL;

    public function __clone()
    {
        $this->clone = "Sklonowany ";
    }
}
