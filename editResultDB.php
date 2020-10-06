<?php

require_once("connect.php");

$mid = $_REQUEST['mid'];
$final = $_REQUEST['final'];
$name = $_REQUEST['name'];
$courseid = $_REQUEST['courseid'];

$updateQuery =
"UPDATE result SET mid=$mid, final=$final WHERE name = '$name'";
$runQuery = mysqli_query($con,$updateQuery);
if($runQuery == true)
    header("location:editResult.php");
    else echo "Error";
?>