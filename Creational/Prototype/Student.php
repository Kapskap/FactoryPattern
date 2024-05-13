<?php

require_once __DIR__.'/Person.php';

class Student extends Person
{
    public $id;
    public $name;

    public function __construct(int $id, string $name, Teacher $teacher)
    {
            $this->id = $id;
            $this->name = $name;
            $this->teacher = $teacher;
    }

    public function ToString(): string
    {
        $teacherName = $this->teacher->name;
        $teacherId = $this->teacher->id;
        return "$this->clone Student $this->name o id $this->id ze swoim nauczycielem $teacherName o id $teacherId<br>";
    }
}