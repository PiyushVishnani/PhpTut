<?php
include ("calculator.html");
$num1=$_POST["num1"];
$num2=$_POST["num2"];

if(isset($_POST["add"]))
{
    echo $num1+$num2;
}
if(isset($_POST["sub"]))

{
    echo $num1-$num2;
}
if(isset($_POST["mul"]))
{
    echo $num1*$num2;
}if(isset($_POST["div"]))
{
    echo $num1/$num2;
}
if(isset($_POST["mod"]))
{
    echo $num1%$num2;
}



?>