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
    <br> <br>
    <hr>
</form> 

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