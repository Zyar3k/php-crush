<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);

// Search array
echo in_array('orange', $fruits);
var_dump(in_array('apple', $fruits));

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

print_r($fruits);

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// // Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
print_r($chunkedArray);
print_r($fruits);


// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

print_r($arr3);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
print_r($arr4);
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

print_r($c);

// Array of keys
$keys = array_keys($c);
print_r($keys);

// Flip keys with values
$flipped = array_flip($c);
print_r($flipped);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

print_r($numbers);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
    return "Number ${number}";
}, $numbers);
print_r($newNumbers);

// Filter array
$lessThan10 = array_filter($numbers, fn ($number) => $number < 10);

print_r($lessThan10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn ($carry, $number) => $carry + $number);
var_dump($sum);
print_r($sum);
