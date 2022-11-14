<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practical.php" method="post">
        <input type="submit" name="stop" value="stop">
    </form>
</body>
</html>
<?php
    session_start();
    define("num",rand(10000000,99999999));
if(isset($_POST['start'])){
    while(isset($_SESSION)){
    // $num=rand(10000000,99999999);
    echo num;
    $num1=10;
    $num2=substr(num,7,1);
    echo "<br>";
    echo substr(num,0,4). " - ". $num1 ." + " . substr(num,7,1);
    echo "<br>";
    $num1+=10;
    $num2*=2;
    header("refresh:2,url=practical.php");
    }
    if(isset($_POST['stop'])){
        session_destroy();
    }
}
?>
