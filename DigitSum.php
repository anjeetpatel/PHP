<!-- php script to take a number from the user and calculate the sum of the digits if a given number  using a loop -->
<!DOCTYPE html>
<html>
    <head>
        <title>Sum of Digits</title>
    </head>
    <body>
        <form method="post">
            <label>Enter a number:</label>
            <input type="text" name="number" required>
            <input type="submit" value="Calculate">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = $_POST['number'];
            $sum = 0;
            for ($i = 0; $i < strlen($number); $i++) {
                $sum += $number[$i];
            }
            echo "The sum of the digits of $number is $sum";
        }
        ?>
    </body>