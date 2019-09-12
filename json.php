<?php
//setting header to json
header('Content-Type: application/json');

//database
include 'db.php';

//get connection

//query to get data from the table
$query = sprintf("SELECT * FROM (SELECT * FROM test ORDER BY time DESC limit 10) t ORDER BY time ASC");

//execute query
$result=$con->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);

?>