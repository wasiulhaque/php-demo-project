

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
	<title>Result</title>
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
<body align = 'center'>
<br><br><br><br><br><br><br><br><br>
<h3>Your Result</h3>
<table border = .1px align = center style="width:60%">
<tr>
<th>Course ID</th>
<th>Course Name</th>
<th>Mid-term Mark</th>
<th>Final Mark</th>
<th>Total</th>
<th>Course Grade</th>
</tr>

<?php

require_once("connect.php");
session_start();
$email = $_SESSION['email'];

$fetchQuery = " SELECT * FROM userinfo WHERE email = '$email' LIMIT 1";
$runQuery = mysqli_query($con,$fetchQuery);
$rows = mysqli_fetch_assoc($runQuery);
$name = $rows['name'];
$grade;
$marksQuery = " SELECT courseid, mid, final FROM result WHERE name = '$name' ";
$runQuery2 = mysqli_query($con,$marksQuery);
$countPlus = 0;
$countCourse = 0;

if($runQuery2 == true){
	while($data = mysqli_fetch_array($runQuery2)){
        $courseid = $data["courseid"];
        $courseQuery = " SELECT * FROM course WHERE id = $courseid LIMIT 1";
        $runQuery3 = mysqli_query($con,$courseQuery);
        $data2 = mysqli_fetch_array($runQuery3);
        $countCourse++; ?>
		<tr>
		<td><?php echo $data["courseid"];?></td>
        <td><?php echo $data2["name"];?></td>
		<td><?php echo $data["mid"];?></td>
		<td><?php echo $data["final"];?></td>
		<?php $total = $data["mid"]+$data["final"];
		if($total>160) { $grade = "A+"; $countPlus++;}
		if($total<160) $grade = "A-";?>
		<td><?php echo $total;?></td>
		<td><?php echo $grade;?></td>
		</tr>
<?php	}
} ?>

</table> <br>

<?php

if($countPlus==$countCourse) echo "<font color = green> Congratulations, $name. You have got CGPA 4.00 out of 4.00 </font>";
else echo "Better luck next time, $name";

?>
<br>


<br>
<a href="studentWelcome.php">Go back</a> <br> <br>
</body>
</html>