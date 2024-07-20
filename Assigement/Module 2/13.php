<?php
// Define the array with five elements
$numbers = array(10, 20, 30, 40, 50);

// Initialize the total variable
$total = 0;

// Use a for loop to sum the elements of the array
for ($i = 0; $i < count($numbers); $i++) {
    $total += $numbers[$i];
}


echo "The total is: $total";
?>
