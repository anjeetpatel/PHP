<!-- php script to combinr twi arrays and print the common elements from the following indexed arrays
 $array1=[1, 3, 5, 7, 9];
 $arrat2 =[3, 7, 11, 15]; -->
<?php
    $array1 = [1, 3, 5, 7, 9];
    $array2 = [3, 7, 11, 15];
    $combined_array = array_merge($array1, $array2);
    $common_elements = array_intersect($array1, $array2);
    print_r($combined_array);
    echo "<br>";
    print_r($common_elements);
?>