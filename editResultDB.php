<?php

require_once("connect.php");

$bangla = $_REQUEST['bangla'];
$english = $_REQUEST['english'];
$math = $_REQUEST['math'];
$name = $_REQUEST['name'];

$updateQuery =
"UPDATE result SET bangla=$bangla, english=$english, math = $math WHERE name = '$name'";
$runQuery = mysqli_query($con,$updateQuery);
if($runQuery == true)
    header("location:editResult.php");
    else echo "Error";
?>