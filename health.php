<?php

$servername = getenv(strtoupper(getenv("DATABASE_SERVICE_NAME"))."_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$password = getenv("DATABASE_PASSWORD");

// Create connection
$conn_string = "host=".$servername." user=".$username." password=".$password."";
$connection = pg_connect($conn_string);

// Check connection
if($connection) {   
  	echo "OK \n";
  	echo $servername."\n";
  	echo $username."\n";
  	echo $password;
}else{
	header("HTTP/1.1 503 Service Unavailable");
  	die("Connection failed: " . $connection);
}
?>
