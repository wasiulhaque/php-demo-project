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
    Name of the Student: <input type="text" name="name"/> <br><br><br>
	Bangla: <input type="number" name="bangla"/> / 100 <br> <br>
    English: <input type="number" name="english"/> / 100 <br> <br>
    Math: <input type="number" name="math"/> / 100 <br> <br> <br>
	<input type="submit" name="submitButton" value ="Submit"/> <br> <br>
	<a href="teacherWelcome.php">Home</a> <br>
    <br> 
</form>

<h3>DATASHEET</h3>
<table border = .1px align = center style="width:60%">
<tr>
<th>Name</th>
<th>Bangla</th>
<th>English</th>
<th>Math</th>
<th>Total</th>
<th>Grade</th>
</tr>



<?php

require_once('connect.php');
$fetchQuery = "SELECT * FROM result";
$runQuery = mysqli_query($con,$fetchQuery);

if($runQuery == true){
	while($data = mysqli_fetch_array($runQuery)){ ?>
		<tr>
		<td><?php echo $data["name"];?></td>
		<td><?php echo $data["bangla"];?></td>
		<td><?php echo $data["english"];?></td>
		<td><?php echo $data["math"];?></td>
		<?php $total = $data["math"]+$data["english"]+$data["bangla"]; 
		if($total>239) $grade = "A+";
		if($total<239) $grade = "A-";?>
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