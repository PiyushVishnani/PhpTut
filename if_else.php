<?php
$amount = 4000;
$members = 1;
if($amount >= 700)
{
    if($members >= 2){
        echo "sonu dhabhe pe kha pi le aur mujhe bhi khila de ";
    }
    else{
        echo "tere pass paisa toh h lekin dost nhi";
    }

}
elseif($amount >= 1000)
{
    echo "food street me khale tere pass baut paisa h";
}
else{
    echo "shanti se mess me kha le";
}
?>