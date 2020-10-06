<?php

require_once("connect.php");

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$semester = $_REQUEST['semester'];
$credit = $_REQUEST['credit'];

$insertQuery =
"INSERT INTO course(id,name,semester,credit) VALUES ($id,'$name','$semester','$credit')";
$runQuery = mysqli_query($con,$insertQuery);
if($runQuery == true)
	header("location:course.php?action=true");
else
    header("location:course.php?action=false");
?>