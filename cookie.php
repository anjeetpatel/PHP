<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Select the Language: <select name="language">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <option value="es">Spanish</option>
            <input type="submit" value="SET MY LANGUAGE" name="submit">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if($_POST["submit"]){
            $language = $_POST["language"];
            setcookie('language', $language, time() + 3600);
        }
    }
    ?>
</body>
</html>