<!-- Php script for 2D. array. -->
<!DOCTYPE html>
<html>
<head>
    <title>2D Array</title>
</head>
<body>
    <h2>2D Array</h2>
    <form method="POST">
        <label for="rows">Enter number of rows:</label>
        <input type="number" id="rows" name="rows" required><br><br>
        
        <label for="columns">Enter number of columns:</label>
        <input type="number" id="columns" name="columns" required><br><br>
        
        <input type="submit" name="submit" value="Create 2D Array">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rows = $_POST['rows'];
        $columns = $_POST['columns'];
        $array = array();

        echo "<h3>2D Array:</h3>";
        echo "<table border='1'>";
        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                $array[$i][$j] = rand(0, 9);
                echo "<td>".$array[$i][$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>