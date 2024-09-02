<!-- given array: $ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34] -->
<!-- find the unique ages in the array and print it -->
<?php
    $ages = [23, 45, 29, 34, 50, 19, 67, 45, 23, 34];
    $unique_ages = array_unique($ages);
    print_r($unique_ages);
?>
<!-- sort the uniquw ages in ascending order -->
<?php
    sort($unique_ages);
    print_r($unique_ages);
?>
<!-- print the largest and smallest from the sorted array -->
<?php
    echo "Largest: " . max($unique_ages) . "<br>";
    echo "Smallest: " . min($unique_ages) . "<br>";
?>