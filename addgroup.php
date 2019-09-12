<?php

include 'db.php';
$group_name=$_POST['group_name'];


$query="INSERT into groups (name) values('$group_name')";


if($con->query($query)===TRUE)
{
	
	echo"Success ";
	}
else
{
	
	echo"Failed";
}

?>