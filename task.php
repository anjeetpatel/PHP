<?php
// String and pattern for the search
$string = "Hello, welcome to the PHP world!";
$pattern = "/php/i";  // Case-insensitive search for 'php'

// Perform case-insensitive search with position capture
if (preg_match($pattern, $string, $matches, PREG_OFFSET_CAPTURE)) {
    echo "Match found: " . $matches[0][0] . "<br>";
    echo "Position of match: " . $matches[0][1];
} else {
    echo "No match found.";
}

?>