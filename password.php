<!--Desgin the php script for PHP password validation check for strngth  -->
<!DOCTYPE html>

<html>
    <head>
        <title>Password Validation</title>
    </head>
    <body>
        <form method="post">
            <label>Enter password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $password = $_POST['password'];
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            } else {
                echo 'Password is strong.';
            }
        }
        ?>
    </body>