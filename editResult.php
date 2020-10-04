<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Result</title>
</head>
<body align='center'>


<br><br><br><br><br><br><br><br><br>
<h3>DATASHEET</h3>
<table border = .1px align = center style="width:60%">
<tr>
<th>Name</th>
<th>Bangla</th>
<th>English</th>
<th>Math</th>
<th>Total</th>
<th>Grade</th>
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
		<td><?php echo $data["bangla"];?></td>
		<td><?php echo $data["english"];?></td>
		<td><?php echo $data["math"];?></td>
		<?php $total = $data["math"]+$data["english"]+$data["bangla"]; 
		if($total>239) $grade = "A+";
		if($total<239) $grade = "A-";?>
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