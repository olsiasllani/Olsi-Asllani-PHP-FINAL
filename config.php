<?php
//Initialization of some variables for maintaining database data
$user="root";
$pass="";
$server="localhost";
$dbname="asp";

try {
	//Creating a PDO to connect with database
	$con =new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}

?>