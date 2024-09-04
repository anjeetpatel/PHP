<!-- create a function with default arguments to demonstrate how default values work when parameters are ommitted -->
<?php

function greet($name = 'Guest') {
    echo "Hello, $name!";
}

greet('John');
echo '<br>';
greet();

?>
