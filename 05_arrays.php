<?php

// Create array - similiar to JS
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
var_dump($fruits);
// use pre tags to make above var_dump easier to read
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1];

// Set element by index
$fruits[0] = 'Peach';
var_dump($fruits);

// Check if array has element at index 2
isset($fruits[2]); // true

// Append element
$fruits[] = "Banana";
var_dump($fruits).'<br>';

// Print the length of the array
echo count($fruits);

// Add element at the end of the array
array_push($fruits, 'Pear');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
array_pop($fruits);

// Add element at the beginning of the array
array_unshift($fruits, 'bar');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string = "Banana,Apple,Peach";
echo '<pre>';
var_dump(explode(",", $string)); // break into string at the ","
echo '</pre>';

// Combine array elements into string
echo '<pre>';
echo implode("&", $fruits);
echo '</pre>';

// Check if element exist in the array
var_dump(in_array('Apple', $fruits)); // true

// Search element index in the array
array_search('Apple', $fruits); // returns index of

// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
array_merge($fruits, $vegetables); // old way

$newArr = [...$fruits, ...$vegetables]; // spread operator
echo '<pre>';
echo var_dump($newArr);
echo '</pre>';

// Sorting of array (Reverse order also)
sort($fruits); // modify original array
rsort($fruits); // reverse sort

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// Arrays with key/value pairs
// ============================================

// Create an associative array
$person = [
  'name' => 'Denver',
  'lastName' => 'Meadows',
  'age' => 39,
  'hobbies' => ['coding', 'running', 'reading']
];
echo '<pre>';
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'];

// Set element by key
$person['city'] = 'Maineville';

// Null coalescing assignment operator. Since PHP 7.4 is a ??=

// Old way to check for address and set if not set
// if (!isset($person['address'])) {
//   $person['address'] = '500 Misty';
// };

// new way
$person['address'] ??= '500 Misty Dawn';

echo '<pre>';
print_r($person);
echo '</pre>';

// Check if array has specific key
var_dump(isset($person['age'])); //bool(true)

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays
// Associative arrays nested inside array.
$todos = [
  ['title' => 'Todo title 1', 'completed' => true],
  ['title' => 'Todo title 2', 'completed' => false],
];

echo '<pre>';
var_dump($todos);
echo '</pre>';