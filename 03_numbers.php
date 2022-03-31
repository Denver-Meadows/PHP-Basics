<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b * $c.'<br>';

// Assignment with math operators
$a = $a + $b; echo $a.'<br>';
//  same as $a += $b

// Increment operator
$a++; echo $a.'<br>';

// Decrement operator
$a--; echo $a.'<br>';

// Number checking functions
is_float(1.25); // true
is_double(1.25); // similiar to is_float -- true
is_int(5); // true
is_numeric("3.45"); // true - it understands it is a number and will be true

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber; // set to float
var_dump($number); // number to see type and value of variable
echo "<br>";

// Number functions (most used)
echo "abs(-15) " . abs(-15) . '<br>'; // absolute value
echo "pow(2,  3) " . pow(2, 3) . '<br>'; // takes 2 arguments, 2 => power of 3
echo "sqrt(16) " . sqrt(16) . '<br>'; // square root
echo "max(2, 3) " . max(2, 3) . '<br>'; // get max number
echo "min(2, 3) " . min(2, 3) . '<br>'; // get min number
echo "round(2.4) " . round(2.4) . '<br>'; // round in normal way
echo "round(2.6) " . round(2.6) . '<br>'; // round in normal way
echo "floor(2.6) " . floor(2.6) . '<br>'; // round down
echo "ceil(2.4) " . ceil(2.4) . '<br>'; // round up

// Formatting numbers
$number = 123456789.12345;
// 2 is number of decimals places to view
// . decimal separator
// , thousands separator
echo number_format($number, 2, '.', ',') . '<br>';

// all math functions from PHP docs
// https://www.php.net/manual/en/ref.math.php
