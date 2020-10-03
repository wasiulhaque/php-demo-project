<?php

require_once("connect.php");

session_start();
$email = $_REQUEST ["email"];
$password = $_REQUEST ["password"];
$_SESSION['email'] = $email;


$fetchQuery = " SELECT * FROM userinfo WHERE email = '$email' and password = '$password' ";
$runQuery = mysqli_query($con,$fetchQuery);
$rows = mysqli_num_rows($runQuery);
$fetchQuery2 = " SELECT * FROM userinfo WHERE email = '$email' and password = '$password' LIMIT 1";
$runQuery2 = mysqli_query($con,$fetchQuery2);
$rows2 = mysqli_fetch_assoc($runQuery2);
$role = $rows2['role'];

if($rows == 1){
    $_SESSION['username'] = $email;
    if($role=="Student")
        header("location: studentWelcome.php");
    else if($role == "Teacher")
        header("location: teacherWelcome.php");
}
else
	header("location:index.php?action=false");
?>