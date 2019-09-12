<?php
include 'db.php';

$name=$_POST['name'];
$message=$_POST['message'];


$query="INSERT into templates (name,message) values('$name','$message')";


if($con->query($query)===TRUE)
{
	
	echo"Success ";
	}
else
{
	
	echo"Failed";
}



?>