<?php

include 'db.php';
$server_name=$_POST['server_name'];
$server_ip=$_POST['server_ip'];
$group=$_POST['group'];


$query="CREATE TABLE `dashboard`.`".$server_name."` ( `time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP() , `cpu` FLOAT(4) NOT NULL , `memory` FLOAT NOT NULL , `disk` FLOAT NOT NULL , `network` FLOAT NOT NULL , PRIMARY KEY (`time`)) ENGINE = InnoDB";
$query1="INSERT into servers (server_name,server_ip,group_name) values('$server_name','$server_ip','$group')";


if($con->query($query)===TRUE AND $con->query($query1)===TRUE)
{
	echo"Success ";
	}
else
{
	
	echo"Failed";
}

?>