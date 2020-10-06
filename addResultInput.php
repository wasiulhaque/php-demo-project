<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Result</title>
</head>
<body align='center'>


<form action = "addResultDB.php" method = "GET" align = "center">
	<br><br><br><br><br><br><br><br><br>
    Name of the Student: <input type="text" name="name"/> <br><br>
	Course ID: <input type="number" name="courseid"/> <br> <br>
    Mid-term Mark: <input type="number" name="mid"/> / 50 <br> <br>
    Final Mark: <input type="number" name="final"/> / 150 <br> <br> <br>
	<input type="submit" name="submitButton" value ="Submit"/> <br> <br>
	<a href="teacherWelcome.php">Home</a> <br>
    <br> 
</form>

<h3>DATASHEET</h3>
<table border = .1px align = center style="width:60%">
<tr>
<th>Name</th>
<th>Course ID</th>
<th>Mid-term Mark</th>
<th>Final Mark</th>
<th>Total Marks</th>
<th>Final Grade</th>
</tr>



<?php

require_once('connect.php');
$fetchQuery = "SELECT * FROM result";
$runQuery = mysqli_query($con,$fetchQuery);

if($runQuery == true){
	while($data = mysqli_fetch_array($runQuery)){ ?>
		<tr>
		<td><?php echo $data["name"];?></td>
		<td><?php echo $data["courseid"];?></td>
		<td><?php echo $data["mid"];?></td>
		<td><?php echo $data["final"];?></td>
		<?php $total = $data["mid"]+$data["final"];
		if($total>160) $grade = "A+";
		if($total<160) $grade = "A-";?>
		<td><?php echo $total;?></td>
		<td><?php echo $grade;?></td>
		</tr>
<?php	}
} ?>

</table>
<br>
<hr>
<br>

<?php

if(isset($_REQUEST["action"])){

	if($_REQUEST["action"] == "true"){
		echo "<font color = 'Green'>Result Added Successfully </font>";
	}

	else if($_REQUEST["action"] == "false") {
		echo "Error";
	}
	
}

?>


</body>
</html>