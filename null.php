
<?php

// Get the three numbers from the user
$num1 = 1;
$num2 = 124;
$num3 = null;

// Check if any of the numbers are null
if (is_null($num1) || is_null($num2) || is_null($num3)) {
  echo "Null collision detected! One or more of the numbers are null.";
} else {
  // Perform some calculation or operation with the numbers
  $result = $num1 + $num2 + $num3;
  echo "The sum of the numbers is: $result";
}

?>