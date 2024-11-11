<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
<?php
// Initialize variables to store form data and errors
$name = $email = $mobile = "";
$skills = [];
$emailErr = $mobileErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format.";
    }
    // Mobile number validation
    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
        $mobileErr = "Mobile number must be 10 digits.";
    }
    // Display data if no errors
    if (empty($emailErr) && empty($mobileErr)) {
        echo "<h3>Form submitted successfully</h3>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Mobile: $mobile<br>";
        echo "Skills: " . implode(", ", $skills) . "<br>";
    }
}
?>
<!-- HTML Form -->
<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
    <span style="color:red;"><?php echo $emailErr; ?></span><br><br>
    <label for="skills">Skills:</label><br>
    <input type="checkbox" name="skills[]" value="Java" <?php if(in_array('Java', $skills)) echo "checked"; ?>> Java<br>
    <input type="checkbox" name="skills[]" value="PHP" <?php if(in_array('PHP', $skills)) echo "checked"; ?>> PHP<br>
    <input type="checkbox" name="skills[]" value="Python" <?php if(in_array('Python', $skills)) echo "checked"; ?>> Python<br>
    <input type="checkbox" name="skills[]" value="JavaScript" <?php if(in_array('JavaScript', $skills)) echo "checked"; ?>> JavaScript<br><br>
    <label for="mobile">Mobile no:</label><br>
    <input type="text" id="mobile" name="mobile" value="<?php echo htmlspecialchars($mobile); ?>" required pattern="[0-9]{10}">
    <span style="color:red;"><?php echo $mobileErr; ?></span><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>