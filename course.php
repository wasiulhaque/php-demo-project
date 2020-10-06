<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Active Courses</title>
</head>
<body align='center'>

<form action = "addCourseDB.php" method = "GET" align = "center">
	<br><br><br><br>
    Add New Course: <br><br>
    Course ID: <input type="number" name="id"/> <br><br>
	Name: <input type="text" name="name"/> / 100 <br> <br>
    Semester: <input type="text" name="semester"/> / 100 <br> <br>
    Credit: <input type="text" name="credit"/> / 100 <br> <br> <br>
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
<hr>
<br>

<?php


	if(isset($_REQUEST["deleted"]))
		echo "<font color = 'Red'> Result Deleted Successfully </font>";
	

?>


</body>
</html>