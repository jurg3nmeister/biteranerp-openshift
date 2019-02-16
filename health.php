<?php

$servername = getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");
$dbname = "biteranerp";
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");

// Create connection
$conn_string = "host=".$servername." dbname=biteranerp user=".$username." password=".$password."";
echo $conn_string;
//$connection = pg_connect($conn_string);

// Check connection
//if($connection) {   
//  	echo "OK \n";
//  	echo $servername."\n";
//  	echo $username."\n";
//  	echo $password;
//}else{
//	header("HTTP/1.1 503 Service Unavailable");
//  	die("Connection failed: " . $connection);
//}
?>
