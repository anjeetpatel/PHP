<!-- simulate a simple game loop where a player rolls a die. the game ends if the player rolls a 6. if they roll an odd number, they gain points, and the loop continues until a 6 is rolled  -->
<!-- palyer rolls a dice. The game end if the player rolls a 6. IF theey roll an odd,they gain pints ,and the loop ontinues until a s6 is rolled -->
<?php
    $score = 0;
    while(true){
        $dice = rand(1,6);
        if($dice == 6){
            echo "You rolled a 6, game over!";
            echo "<br>";
            echo "Your score is $score";
            break;
        }elseif($dice % 2 != 0){
            $score += $dice;
            echo "You rolled a $dice, your score is $score <br>";
        }else{
            echo "You rolled a $dice, your score is $score <br>";
        }
    }
?>