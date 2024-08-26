
<?php
// Define the constant variables
const x = 3;
const y = 20;

// Create a function to add the constant variables
function addConstants($x,$y) {
    $result = $x + $y;
    return $result;
}

// Call the function and display the result
echo "The result of the addition is: " . addConstants(x,y);
?>