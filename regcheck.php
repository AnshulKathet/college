<?php

	require_once "include/config.php";
	
	$email=trim($_POST["email"]);
	$pass=trim($_POST["pass"]);
	
	$sql="insert into login (userid,password) values('".$email."','".$pass."')";
	
	mysqli_query($con,$sql);
	
	header("location:login.php?msg=register sucessfully");

?>