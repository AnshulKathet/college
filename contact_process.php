<?php
require_once "include/config.php";
    $to = "spn8@spondonit.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];

    
	
	$sql="insert into contact(message,subject,emailid,name)values('".$cmessage."','".$subject."','".$from."','".$name."')";
	
	mysqli_query($con,$sql);
	
	header("location:index.php?msg=submit your query successfully");

?>