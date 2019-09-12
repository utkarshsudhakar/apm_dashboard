<?php
include 'db.php';

$email=$_POST['email'];
$phone=$_POST['phone'];


$query="INSERT into emails (email,phone) values('$email','$phone')";


if($con->query($query)===TRUE)
{
	
	echo"Success ";
	}
else
{
	
	echo"Failed";
}



?>