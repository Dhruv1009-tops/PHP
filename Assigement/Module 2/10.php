<?php
// Input array with duplicate values
$array = array("apple", "banana", "apple", "orange", "banana", "grape");

// Remove duplicate values
$uniqueArray = array_unique($array);

// Output the array with unique values
print_r($uniqueArray);
?>
