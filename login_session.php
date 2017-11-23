<?php
	session_start();
	
	include('connection.php');
	//$li = mysqli_connect("localhost","16lemca026","10","16lemca026");
	$username=$_POST['username'];
	$password=$_POST['password'];
    
 $res=mysqli_query($con,"select * from login where username='".$username."' and  password='".$password."'");
	
	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($res) == 1)
			{
				$_SESSION['username'] = $username; // Initializing Session
				header("location:production/admin_home.php"); // Redirecting To Other Page
			}else
			{
				$error = "Incorrect username or password.";
			}
	
?>