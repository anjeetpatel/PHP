<?php
// $x=60;
// var_dump($x);
// echo "<br>";
// var_dump(true);
// echo "<br>";
// echo"".PHP_INT_MIN."";
// echo "<br>";
$x=60;
if(is_int($x)){
    if($x> 0){
        echo"positive number";
    }else if($x<0){
        echo "negative number";
    }else{
        echo "number is zero";
    }
}

// echo str_replace("Anjeet", ".Rohan", $name);
echo "<br>";
// echo str_repeat($name,4);
echo "<br>";

// print "hello";

$cars = array("zen","maruti","fiat");
print $cars[0];
echo "<br>";
print $cars[1];
echo "<br>";
for($i=0; $i<sizeof($cars); $i++){
    echo "$cars[$i]";
    echo "<br>";
}

$arr = array(81,5,24,534,6,42,64);
$min=$arr[0];
$max = $arr[1];
for($i=0;i<sizeof($arr);i++){
    if($min<$i){
        $min = $i;
    }
}
echo 
?>
