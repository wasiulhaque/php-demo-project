<?php

require_once("connect.php");

$name = $_REQUEST ["name"];
$role = $_REQUEST ["role"];
$email = $_REQUEST ["email"];
$password = $_REQUEST ["password"];
$semester = $_REQUEST ["semester"];

$insertQuery =
"INSERT INTO userinfo(name,role,email,password,semester) VALUES ('$name','$role','$email','$password',$semester)";
$runQuery = mysqli_query($con,$insertQuery);
if($runQuery == true)
	header("location:index.php?action=true");
else
	header("location:index.php?action=false");

?>