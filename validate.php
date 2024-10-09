<!-- take a input string from the user and validate it  -->
<?php
// Sample input string
$input = "Hello, welcome to the PHP world!";

// Validate the input string
if (preg_match("/php/i", $input)) {
    echo "The input string contains 'php'.";
} else {
    echo "The input string does not contain 'php'.";
}
?>