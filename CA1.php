<!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
</head>
<body>
    <form method="post">
        <label>Enter the number</label>
        <input type="number" name="num" placeholder="Enter num">
        <input type="submit" name="submit" value="Find Factorial">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $num = $_POST['num'];
            $fact = 1;
            $i = 1;
            while($i <= $num){
                $fact = $fact * $i;
                $i++;
            }
            echo "<h2>factorial of a num entered by user is $fact</h2>";
        }
    ?>
</html>