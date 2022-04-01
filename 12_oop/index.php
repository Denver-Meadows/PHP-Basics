<?php

require_once 'Person.php';
require_once 'Student.php';

$student = new Student("Denver Meadows", 39, 1234);

echo var_dump($student);