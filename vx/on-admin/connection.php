<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_uas";
	
	//Create Connection
	$con = new mysqli($servername, $username, $password, $dbname);
	//Check Connection
	if ($con->connect_error) {
		die("Connection Failed: ") . $con->connect_error;
	}
?>