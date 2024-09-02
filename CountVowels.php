<!-- write a php script to take string as input using form and print total number of vowels in the string -->
<!DOCTYPE html>
<html>
    <head>
        <title>Count Vowels</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="string" placeholder="Enter a string">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $string = $_POST['string'];
                $vowels = ['a', 'e', 'i', 'o', 'u'];
                $count = 0;
                for($i = 0; $i < strlen($string); $i++){
                    if(in_array($string[$i], $vowels)){
                        $count++;
                    }
                }
                echo "Total number of vowels in the string: " . $count;
            }
        ?>
    </body>
</html>
