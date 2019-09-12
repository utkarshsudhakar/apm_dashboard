<?php
include 'db.php';

$server_name=$_GET['server_name'];
$cpu=$_GET['cpu'];
$mem=$_GET['mem'];
$disk=$_GET['disk'];
$nw=$_GET['nw'];

$query="INSERT INTO ".$server_name." (cpu,memory,disk,network) values('$cpu','$mem','$disk','$nw')";

if($con->query($query)===TRUE)
{
	
	echo"Success ";
	}
else
{
	
	echo"Failed";
}

?>