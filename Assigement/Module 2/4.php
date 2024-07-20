<?php
// Initialize the first two numbers of the Fibonacci series
$num1 = 0;
$num2 = 1;

// Print the first two numbers
echo $num1 . ", " . $num2;


while (true) {
    $num3 = $num1 + $num2;
    if ($num3 > 34) {
        break;
    }
    echo ", " . $num3;
    $num1 = $num2;
    $num2 = $num3;
}
?>
