<?php

$host = "localhost";
	$dbUser = "admin";
	$dbPassword = "admin123";
	$con = mysqli_connect($host,$dbUser,$dbPassword,"resultmanagement");
	
	if($con == true)
		echo "<font color = 'green'> Database Connected </font> <br>";
	else
		echo "<font color = 'red'> Database could not be connected </font>";

?>