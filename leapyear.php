<!-- write a php script to take a year as an input and check whether it is leap year or not -->
<!DOCTYPE html>
<html>
    <head>
        <title>Leap Year</title>
    </head>
    <body>
        <form method="post">
            <label>Enter year:</label>
            <input type="text" name="year" required>
            <input type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $year = $_POST['year'];
            if ($year % 4 == 0) {
                if ($year % 100 == 0) {
                    if ($year % 400 == 0) {
                        echo "$year is a leap year";
                    } else {
                        echo "$year is not a leap year";
                    }
                } else {
                    echo "$year is a leap year";
                }
            } else {
                echo "$year is not a leap year";
            }
        }
        ?>
    </body>
</html>