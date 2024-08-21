<!-- write the php script to calculate area of circle rectangle traingle -->
<?php
    $radius = 10;
    $area = 3.14 * $radius * $radius;
    echo "Area of circle is: " . $area . "<br>";

    $length = 10;
    $breadth = 20;
    $area = $length * $breadth;
    echo "Area of rectangle is: " . $area . "<br>";

    $base = 10;
    $height = 20;
    $area = 0.5 * $base * $height;
    echo "Area of traingle is: " . $area . "<br>";
?>