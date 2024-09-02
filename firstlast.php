<!-- php script to remove thef irwst and last element of the array -->
<?php
    $arr = array(1, 2, 3, 4, 5);
    array_shift($arr);
    array_pop($arr);
    print_r($arr);
?>