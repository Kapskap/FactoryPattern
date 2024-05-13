<?php

require __DIR__.'/Teacher.php';
require __DIR__.'/Student.php';

echo "<b>Prototyp</b><br><br>";


$teacher = new Teacher(1, "Marcin");
echo($teacher->ToString());
$teacherClone = clone $teacher;
echo($teacherClone->ToString());

$student = new Student(2, "Tomasz", $teacherClone);
echo($student->ToString());
$studentClone = clone $student;
echo($studentClone->ToString());

$teacherClone->setName("Wanda");
echo($studentClone->ToString());
