<?php

require_once("connect.php");

$name = $_REQUEST ["name"];
$role = $_REQUEST ["role"];
$email = $_REQUEST ["email"];
$password = $_REQUEST ["password"];

$insertQuery =
"INSERT INTO userinfo(name,role,email,password) VALUES ('$name','$role','$email','$password')";
$runQuery = mysqli_query($con,$insertQuery);
if($runQuery == true)
	header("location:index.php?action=true");
else
	header("location:index.php?action=false");

?>