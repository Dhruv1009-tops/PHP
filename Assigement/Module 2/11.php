<?php
// Input array
$array = array("apple", "banana", "cherry", "date", "elderberry");

// Get a random key from the array
$randomKey = array_rand($array);

// Get the random value using the random key
$randomValue = $array[$randomKey];

// Output the random value
echo "Random value: $randomValue";
?>
