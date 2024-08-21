<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Celsius: <input type="number" name="celsius" required>
    <input type="submit" value="Convert">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST["celsius"];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "$celsius °C is $fahrenheit °F";    
}
?>
