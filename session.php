<?php
$username="admin";
$password="admin123";
session_start();
if(isset($_SESSION['user'])){
    // echo "hello" . "<h3 align=right style='color:red'>$_SESSION['user']</h3>";
    echo "here you are scrolling home page content";
}
else{
    if($username==$_POST['uname'] and $password==$_POST['pass']){
        $_SESSION['user']=$username;
        echo "<script>location.href='home.php'</script>";
}
    else{
        echo "<script>alert('invalid username and password')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
?>