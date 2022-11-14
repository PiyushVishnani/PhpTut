<?php
$num1 = 1;
$num2 = 2;
$num3 = 3;
switch($num1>$num2 && $num1>$num3){
    case 1:
        echo "$num1 is greater";
        break;
    case 0: switch($num2>$num3 && $num2>$num1){
        case 1:
            echo "$num2 is greater";
            break;
        case 0:
            echo "$num3 is greater";
            break;    
    }    
}
?>