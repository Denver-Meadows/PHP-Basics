<?php

// Create simple string
$name = "Denver";
$string = 'Hello $name Welcome back'; // single quotes will note access variable inside string
$string2 = "Hello $name Welcome back"; // double quotes does allow access to variables
echo $string.'<br>';
echo $string2.'<br>';

// String concatenation
// the "." is used for concatenation
echo 'Hello'.' World'.'<br>';

// String functions
// PHP_EOL is ostensibly used to find the newline character in a cross-platform-compatible way, so it handles DOS/Unix issues.
// Note that PHP_EOL represents the endline character for the current system. For instance, it will not find a Windows endline when executed on a unix-like system.

$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL; // length
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL; // left trim
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL; // right trim
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL; 
echo "6 - " . strrev($string) . '<br>' . PHP_EOL; // reverse string
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL; 
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL; // uppercase first letter
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL; // lowercase first letter 
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL; // uppercase first letter of each word
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // searches string for world inside screen, case sensitive
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL; // searches string for world but not case sensitive
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL; // like slice in JS
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;

// Multiline text and line breaks
$longText = "
  Hello, my name is Zura
  I am 27,
  I love my daughter
";
echo $longText; // ignores white space when printing
echo nl2br($longText); // new line 2 break.  It sees and maintains the line breaks

// Multiline text and reserve html tags
$longText2 = "
  Hello, my name is <b>Zura</b>
  I am <b>27</b>,
  I love my daughter
";
echo $longText2;
echo nl2br($longText2);
echo htmlentities($longText2); // reserves html tags and shows the html tags
echo nl2br(htmlentities($longText2));

// https://www.php.net/manual/en/ref.strings.php