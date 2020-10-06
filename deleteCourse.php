<?php
require_once("connect.php");
$getID = $_REQUEST["id"];
$deleteQuery = "DELETE FROM course WHERE id = $getID";
$runQuery = mysqli_query($con,$deleteQuery);
if($runQuery == true){
    header("location: course.php?deleted");
} 

?>