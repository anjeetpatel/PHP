<!-- pass a callback to php's array map() function to calculate the length of every string in an array -->
<?php
// Array of strings
$strings = ["apple", "banana", "cherry", "date"];

// Use array_map() with strlen as the callback function
$lengths = array_map('strlen', $strings);

// Print the result
print_r($lengths);
?>