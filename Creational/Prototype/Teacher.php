<?php

require_once __DIR__.'/Person.php';

class Teacher extends Person
{
    public $id;
    public $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function ToString()
    {
        return "$this->clone Nauczyciel $this->name o id $this->id<br>";
    }
}