<?php
$con=mysqli_connect('localhost','root','','mywebsite');
if(isset($_POST['save']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
	if(!$con)
	{
		die("connection failed").error();
	}
    // while($arr=mysqli_fetch_array(mysqli_query($con,'SELECT * FROM registration WHERE id=$"ID"'))){
    //     if($arr['id']!=$id) break; $ID++;
    // }
	 $insert_query="INSERT INTO database2(name,email,password) values ('$name','$email','$password')";
	if(mysqli_query($con, $insert_query))
	{
		echo "record inserted succefully";
		header("refresh:3,url=database2.html");
		// header("location:database2.html");
	}
}
if(isset($_POST['display']))
	{
	 $display_query="SELECT id,name,email,password FROM database2";
	 $data=mysqli_query($con, $display_query);
	
	 if(mysqli_num_rows($data)>0)
	 {
	 	 echo "<table style='border:1px solid black'>
	    <tr>
	    <th>Id</th>
	    <th>Username</th>
	    <th>Email</th>
	    <th>Password</th>
	    </tr>";
	    while($result=mysqli_fetch_array($data))
	    {    
	 	    echo "<tr>>";
            echo "<td style='border:1px solid black'>". $result['id']. "</td>";
            echo "<td style='border:1px solid black'>". $result['name']. "</td>";
            echo "<td style='border:1px solid black'>". $result['email']. "</td>";
            echo "<td style='border:1px solid black'>". $result['password']. "</td>";
	    }
    }
    else
    {
    echo "No data found";
    } 
}
?>