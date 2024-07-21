/* In PHP, you can declare different types of arrays: indexed arrays, associative arrays, and multidimensional arrays. Here are examples of each:

1. Indexed Arrays
Indexed arrays use numeric indices.
*/
// Using array() function
$fruits = array("Apple", "Banana", "Cherry");

// Using short array syntax
$fruits = ["Apple", "Banana", "Cherry"];
2. Associative Arrays
Associative arrays use named keys.
// Using array() function
$ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

// Using short array syntax
$ages = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
3. Multidimensional Arrays
Multidimensional arrays contain one or more arrays.// Using array() function
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// Using short array syntax
$cars = [
    ["Volvo", 22, 18],
    ["BMW", 15, 13],
    ["Saab", 5, 2],
    ["Land Rover", 17, 15]
];

<?php
//Converting a JSON String to an Array
$json_string = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
$array = json_decode($json_string, true);

// Output the array
print_r($array);
?>

