<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword  = "";
	$dbName = "sparton";
	$con =mysqli_connect("localhost","root","","sparton");
	if(!$con)
	{
		die("Can't connect:".mysql_error($con));
	}
	else
	{
		echo "";
	}
?>
