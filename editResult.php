<!DOCTYPE html>
<html lang="en">
<head>
<style>
        table{margin:auto;
            text-align: center;}
            table th{ text-align: center; }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Result</title>
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


<br><br><br><br><br><br><br><br><br>
<h3>DATASHEET</h3>
<table border = .1px align = center style="width:60%">
<tr>
<th>Name</th>
<th>Course ID</th>
<th>Mid-term Mark</th>
<th>Final Mark</th>
<th>Total</th>
<th>Final Grade</th>
<th>Action</th>
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
        <td><a href='editData.php?id=<?php echo $data["id"];?>'>Edit</a> | <a href='deleteData.php?id=<?php echo $data["id"];?>'>Delete</a></td>    
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