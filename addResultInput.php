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
	<title>Add Result</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
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
<br><br><br><br><br><br><br><br>


<form action = "addResultDB.php" method = "GET" align = "center">
    Name of the Student: <input type="text" name="name"/> <br><br>
	Course ID: <input type="number" name="courseid"/> <br> <br>
    Mid-term Mark: <input type="number" name="mid"/> / 50 <br> <br>
    Final Mark: <input type="number" name="final"/> / 150 <br> <br> <br>
	<input type="submit" name="submitButton" value ="Submit"/> <br> <br>
	<a href="teacherWelcome.php">Home</a> <br>
    <br> 
</form>

<h3 align=center>DATASHEET</h3>
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