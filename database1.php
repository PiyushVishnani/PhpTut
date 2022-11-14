<?php
$name=$_POST['uname'];
$mob_no=$_POST['contact'];
//procedural
$connection_details=mysqli_connect("localhost","root","","mywebsite");
// if(!$connection_details){
//     echo "unable to eastablish connection";
//     exit();
// }
//or
if(!$connection_details){
    die("unable to eastablish connection") . error();
}
$insert_query="INSERT INTO registration(`uname`,`contact`) VALUES ('$name','$mob_no')";
if(mysqli_query($connection_details,$insert_query)){
    echo "connection successful";
}
else{
    echo "kuch glti kari h";
}
?>