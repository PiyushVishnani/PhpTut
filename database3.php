<?php
if(isset($_POST['save']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
	$con=mysqli_connect('localhost','root','','mywebsite');
	if(!$con)
	{
		echo "You are not connect to the server";
        error();
	}
	 $sql="INSERT INTO database2(name,email,password) values ('$name','$email','$password')";
	if(mysqli_query($con, $sql))
	{
		//echo "record inserted succefully";
		//header("refresh:5,url=secm.html");
		header("location:database3.html");
	}
}
if(isset($_POST['display']))
	{
	$con=mysqli_connect('localhost','root','','mywebsite');
	if(!$con)
	{
		echo "You are not connect to the server";
	}
	 $sql="SELECT id,name,email,password FROM database2";
	 $result=mysqli_query($con, $sql);
	var_dump($result);
	 if(mysqli_num_rows($result)>0)
	 {
	 	 echo "<table border='1' bgcolor= aqua>
	 <tr>
	 <th>Id</th>
	 <th>Username</th>
	 <th>Email</th>
	 <th>Password</th>
	 <th colspan=2>Action</th>
	 </tr>";
	 while($row=mysqli_fetch_array($result))
	 {    
	 	echo "<tr><form action=database3.php method=post>";
	 	echo "<td><input type=text name=id readonly value='".$row['id']."'></td> ";
	 	echo "<td><input type=text name=username value='".$row['name']."'></td> ";
	 	echo "<td><input type=text name=email value='".$row['email']."'></td> ";
	 	echo "<td><input type=text name=password value='".$row['password']."'></td> ";
	 	
	 	echo "<td><input type=submit value=Update name=update>";
	 	echo "<td><input type=submit value=Delete name = delete>";
	 	echo "</form></tr>";
	 }
}
else
{
echo "No rows found";
} 
echo "</table>";
}
if(isset($_POST['update']))
{
	$con = mysqli_connect('localhost','root','','mywebsite');     
  if(!$con)  
  {  
      echo 'not connected to the server';  
  } 
 $name = $_POST['username'];
 $eid = $_POST['id'];
 $eml = $_POST['email'];
 $pass = $_POST['password'];
 $sql1="UPDATE database2 SET name='$name', email='$eml' , password='$pass' WHERE id='$eid'";
  if(mysqli_query($con,$sql1))
  {
  	echo "updated";
    header("refresh:3,url=database3.html");
  }
}
if(isset($_POST['delete']))
{
	$con = mysqli_connect('localhost','root','','mywebsite');     
	if(!$con)  
	{  
		echo 'not connected to the server';  
	}
	$eid = $_POST['id'];
	$delete_row = "DELETE FROM database2 WHERE id = '$eid'";
	if(mysqli_query($con,$delete_row)){
		echo "deleted";
		header("refresh:3,url=database3.html");
	} 
}
?>