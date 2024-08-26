<?php
// Define PI as a constant
define('PI', 3.14159);

// Function to calculate the area of a circle
function calculateCircleArea($radius) {
  return PI * pow($radius, 2);
}

// Get the radius from the user
$radius = (float) readline("Enter the radius of the circle: ");

// Calculate and display the area
$area = calculateCircleArea($radius);
echo "The area of the circle is: " . number_format($area, 2) . " square units";

?>