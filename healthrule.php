<?php
include 'db.php';

$warning=$_POST['warning'];
$critical=$_POST['critical'];

$query="UPDATE healthrules SET warning=$warning,critical=$critical WHERE id=1";


if($con->query($query)===TRUE)
{
	
	echo"Success ";
	}
else
{
	
	echo"Failed";
}




?>