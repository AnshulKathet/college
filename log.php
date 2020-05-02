<?php
    session_start();
	require_once "include/config.php";
	
	$email=$_POST["email"];
	$pass=$_POST["pass"];
	
	$sql="select * from login";
	
	$row=mysqli_query($con,$sql);
	
	$i=0;
	$flag=0;
	while($i<=($res=mysqli_fetch_array($row)))
	{
		if(($email==$res["userid"]) and ($pass==$res["password"]))
		{
			$_SESSION["user"]=$email;
			$flag=1;
		}
		
		$i++;
	}
	
	if($flag==1)
	{
		header("location:index.php?msg=login successfully");
	}
	else
	{
		header("location:login.php?msg=invalid email id and password");
	}
		

?>