<?php
function checkEvenOdd($number) {
    $result = ($number & 1) ? "Odd" : "Even";
    return $result;
}

// Example usage
$number = 7;
echo "$number is " . checkEvenOdd($number);
?>
