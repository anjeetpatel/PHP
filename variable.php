<?php
$x = 60;
if (is_int($x)) {
    if ($x > 0) {
        echo "positive number";
    } elseif ($x < 0) {
        echo "negative number";
    } else {
        echo "number is zero";
    }
}

$cars = array("zen", "maruti", "fiat");
print $cars[0];
echo "<br>";
print $cars[1];
echo "<br>";
for ($i = 0; $i < sizeof($cars); $i++) {
    echo "$cars[$i]";
    echo "<br>";
}

$arr = array(81, 5, 24, 534, 6, 42, 64);
$min = $arr[0];
$max = $arr[0];
for ($i = 0; $i < sizeof($arr); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
}
echo "Minimum value: $min";
echo "<br>";
echo "Maximum value: $max";
?>