<!-- even odd using if else in php -->
 <!-- do it by taking user inout in form -->
<!DOCTYPE html>
<html>
    <head>
        <title>Even or Odd</title>
    </head>
    <body>
        <form method="post">
            <label>Enter a number:</label>
            <input type="text" name="number" required>
            <input type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = $_POST['number'];
            if ($number % 2 == 0) {
                echo "$number is even";
            } else {
                echo "$number is odd";
            }
        }
        ?>
    </body>
