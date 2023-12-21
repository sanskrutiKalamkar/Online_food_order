<?php

function Connect()
{
	$dbhost = "mysqldbsvraz.mysql.database.azure.com";
	$dbuser = "mysqladmin";
	$dbpass = "";
	$dbname = "foodorder";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);

	return $conn;
}
?>
