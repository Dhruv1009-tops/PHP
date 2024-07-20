<?php
// JSON string
$jsonString = '{"name":"John", "age":30, "city":"New York"}';

// Decode JSON string into a PHP array
$array = json_decode($jsonString, true);

print_r($array);
?>
