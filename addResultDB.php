<?php

require_once("connect.php");

$bangla = $_REQUEST['bangla'];
$english = $_REQUEST['english'];
$math = $_REQUEST['math'];
$name = $_REQUEST['name'];

$insertQuery =
"INSERT INTO result(name,bangla,english,math) VALUES ('$name',$bangla,$english,$math)";
$runQuery = mysqli_query($con,$insertQuery);
if($runQuery == true)
	header("location:addResultInput.php?action=true");
else
    header("location:addResultInput.php?action=false");


?>