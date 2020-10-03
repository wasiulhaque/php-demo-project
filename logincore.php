<?php

require_once("connect.php");

$email = $_REQUEST ["email"];
$password = $_REQUEST ["password"];

$fetchQuery = " SELECT * FROM userinfo WHERE email = '$email' and password = '$password' ";
$runQuery = mysqli_query($con,$fetchQuery);
$rows = mysqli_num_rows($runQuery);

if($rows == 1){
    $_SESSION['username'] = $email;
    header("location: welcome.php"); 
}
else
	header("location:index.php?action=false");
?>