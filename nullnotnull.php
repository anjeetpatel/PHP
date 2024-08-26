//write a php script to take multiple null and not null and find the first null value?
<?php

// Example variables
$a = 'hello';
$b = null;
$c = 'world';
$d = null;
$e = 'foo';

// Create an array of variables
$vars = array($a, $b, $c, $d, $e);

// Find the first null value
$firstNull = null;
foreach ($vars as $key => $var) {
    if ($var === null) {
        $firstNull = $var;
        break;
    }
}

// Print the result
if ($firstNull !== null) {
    echo "The first null value is at index $key";
} else {
    echo "No null values found";
}

// Alternative method using array_filter
echo "<br><br>";
$vars = array($a, $b, $c, $d, $e);
$nullValues = array_filter($vars, function($var) {
    return $var === null;
});
if (!empty($nullValues)) {
    $firstNull = key($nullValues);
    echo "The first null value is at index $firstNull";
} else {
    echo "No null values found";
}

// Alternative method using array_keys
echo "<br><br>";
$vars = array($a, $b, $c, $d, $e);
$nullKeys = array_keys($vars, null);
if (!empty($nullKeys)) {
    echo "The first null value is at index " . $nullKeys[0];
} else {
    echo "No null values found";
}

?>