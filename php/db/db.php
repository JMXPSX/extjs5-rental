<?php

$server = "127.0.0.1";
$user = "root";
$pass = "";
$dbName = "sakila";

$mysqli = new mysqli($server, $user, $pass, $dbName);

if($mysqli->connect_errno){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}

?>