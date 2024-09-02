<!-- swearch in an arrat -->
<?php
    $ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
    $key = array_search(45, $ages);
    echo "Key of 45: " . $key . "<br>";
    $key = array_search(34, $ages);
    echo "Key of 34: " . $key . "<br>";
    $key = array_search(100, $ages);
    echo "Key of 100: " . $key . "<br>";
?>
