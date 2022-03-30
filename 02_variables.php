<?php

// Variable types -- you do not need to declare the variable type, like JS
// String, integer, float, boolean, null, array, object, resourse

// Declare variables
$name = "Denver";
$age = 39;
$isMale = true;
$height = 1.85;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
// when a boolean is converted to a string (by printing) true=1, false="empty string"
echo $isMale.'<br>';
echo $height.'<br>';
// null = "empty string" when printed
echo $salary.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// Print the whole variable
// useful for debugging to see what the variable contains
var_dump($name);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name).'<br>';

// Variable checking functions
is_string($name); // should be false since we changed name type

// Check if variable is defined
isset($name); // true
isset($address); // false - not declared

// Constants
// We need to "define" constants with the name and value
define('PI', 3.14);
echo PI.'<br>';

// Using PHP built-in constants
echo SORT_ASC.'<br>'; // sort ascending
echo PHP_INT_MAX.'<br>'; // prints the max integer value in PHP
