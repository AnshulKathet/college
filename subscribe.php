<?php
	require_once "include/config.php";
	
	$email=trim($_GET["email"]);
	
	$sql="insert into subscribe values('".$email."')";
	
	
	mysqli_query($con,$sql);
	
	header("location:index.php?msg=successfully subscribe");

?>