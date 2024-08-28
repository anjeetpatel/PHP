<!-- The spaceship operator is used for comparing two expressions. It returns -1, 0, or 1 when $x is respectively less than, equal to, or greater than $y. The spaceship operator is used in the following way: $x <=> $y. The spaceship operator is also called the three-way comparison operator. -->
<!-- The spaceship operator is used for comparing two expressions. It returns -1, 0, or 1 when $x is respectively less than, equal to, or greater than $y. The spaceship operator is used in the following way: $x <=> $y. The spaceship operator is also called the three-way comparison operator. -->

<?php
$x = 50;
$y = 50;
$z = 25;
echo $x<=>$y; // 0
echo"\n";
echo $x<=>$z; // 1
echo"\n";
echo $z<=>$x; // -1
echo"\n";
?>
