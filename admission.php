<?php

	require_once "include/config.php";
	
	$fname=trim($_GET["fname"]);
	$lname=trim($_GET["lname"]);
	$email=trim($_GET["email"]);
	$msg=trim($_GET["msg"]);
	$mobile=trim($_GET["mobile"]);
	
	
	
	
	$sql="insert into admission (fname,lname,mobile,email,msg) values('".$fname."','".$lname."','".$mobile."','".$email."','".$msg."')";
	
	mysqli_query($con,$sql);
	
	header("location:index.php?msg=admission details add succesfully");
	
  

?>











