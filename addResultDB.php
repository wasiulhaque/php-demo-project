<?php

require_once("connect.php");

$courseid = $_REQUEST['courseid'];
$mid = $_REQUEST['mid'];
$final = $_REQUEST['final'];
$name = $_REQUEST['name'];

$insertQuery =
"INSERT INTO result(name,courseid,mid,final) VALUES ('$name',$courseid,$mid,$final)";
$runQuery = mysqli_query($con,$insertQuery);
if($runQuery == true)
	header("location:addResultInput.php?action=true");
else
    header("location:addResultInput.php?action=false");


?>