<?php
$a = '1'; 
$b = &$a; 
$b = "2$b";
echo $a;
echo $b;
?>
// Ans is 2121 