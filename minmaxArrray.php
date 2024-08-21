<?php

// Define the array
$array = array(12, 45, 7, 23, 56, 89, 34);

// Function to find minimum and maximum values in the array
function findMinAndMax($array) {
    $min = $array[0];
    $max = $array[0];

    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        } elseif ($value > $max) {
            $max = $value;
        }
    }

    return array($min, $max);
}

// Call the function and print the results
list($min, $max) = findMinAndMax($array);

echo "Minimum value: $min\n";
echo "Maximum value: $max\n";

?>