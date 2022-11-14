
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$number=$_POST['number'];
$num=rand(1,10);
if(isset($_POST['submit'])){
    define("x",$num);
    echo x;
    if($number==x){
        echo "your prediction is correct";
    }
    elseif($number>x){
        echo "your number is higher";    
    }
    else{
        echo "your number is lower";
    }
}
?>
<body>
    <form action="assignment5.php" method="POST">
        <input type="number" name="number" id="">
        <input type="submit" name="submit" value="check">
    </form>
</body>
</html>

