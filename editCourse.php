<?php

require_once("connect.php");

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$semester = $_REQUEST['semester'];
$credit = $_REQUEST['credit'];

$updateQuery =
"UPDATE course SET name='$name', semester='$semester', credit = '$credit' WHERE id = $id";
$runQuery = mysqli_query($con,$updateQuery);
if($runQuery == true)
    header("location:course.php");
    else{
        echo $id;
        echo $semester;
        echo $name;
        echo $semester;
        echo "Error404";    
    }
?>