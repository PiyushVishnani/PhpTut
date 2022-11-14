<?php
//write a php script that reads 3 integer numbers from a user and check the minimum number by using terary operator.
//write a php script that reads a string data from user and split the content into 3 characters combinations.
//write a php script that reads a numeric value from user and check wheater the inputed number is adom or not by using functions with arguments with return type.
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
if($num1>$num2 && $num1>$num3){
    echo $num1 . " is greatest";
}
if($num2>$num1 && $num2>$num3){
    echo $num2 . " is greatest";
}
if($num3>$num2 && $num3>$num1){
    echo $num3 . " is greatest";
}
?>