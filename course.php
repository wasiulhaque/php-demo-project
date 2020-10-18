<!DOCTYPE html>
<html lang="en">
<head>
<style type = "text/css">
	table{margin:auto;}
	table th{ text-align: center; }
	input[type=text] {
  width: 30%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;

  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=number] {
  width: 10%;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid black;

  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=submit] {
  width: 10%;
  text-align: center;
  padding: 10px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  background: green;
  color: white;

  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

	</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Active Courses</title>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body align='center'>

<form action = "addCourseDB.php" method = "GET" align = "center">
	<br><br><br><br>
    <h5>Add New Course: </h5><br>
    Course ID: <input type="number" name="id"/> <br><br>
	Name: <input type="text" name="name"/> / 100 <br> <br>
    Semester: <input type="text" name="semester"/> / 100 <br> <br>
    Credit: <input type="text" name="credit"/> / 100 <br> <br> 
	<input type="submit" name="submitButton" value ="Submit"/> 
</form>
<br>

<h3>COURSE SHEET</h3>
<table border = .1px align = center style="width:60%">
<tr>
<th>Course ID</th>
<th>Name</th>
<th>Semester</th>
<th>Credit</th>
<th>Action</th>
</tr>



<?php

require_once('connect.php');
$fetchQuery = "SELECT * FROM course";
$runQuery = mysqli_query($con,$fetchQuery);

if($runQuery == true){
	while($data = mysqli_fetch_array($runQuery)){ ?>
		<tr>
		<td><?php echo $data["id"];?></td>
		<td><?php echo $data["name"];?></td>
		<td><?php echo $data["semester"];?></td>
		<td><?php echo $data["credit"];?></td>

        <td><a href='editCourseData.php?id=<?php echo $data["id"];?>'>Edit</a> | <a href='deleteCourse.php?id=<?php echo $data["id"];?>'>Delete</a></td>    
		</tr>
<?php	}
} ?>

</table>
<br>
<a href="teacherWelcome.php">Home</a>

<br>

<?php


	if(isset($_REQUEST["deleted"]))
		echo "<font color = 'Red'> Result Deleted Successfully </font>";
	

?>


</body>
</html>