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
    <title>Student Page</title>

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

    <br>
    <table border = .1px align = center style="width:30%">
    <tr>
    <th>Course ID</th>
    <th>Course Name</th>
    <th>Credit</th>

    </tr>
    
    <?php
    require_once("connect.php");
    session_start();
    $email = $_SESSION['email'];
    $fetchQuery1 = " SELECT * FROM userinfo WHERE email = '$email' LIMIT 1";
    $runQuery1 = mysqli_query($con,$fetchQuery1);
    $rows1 = mysqli_fetch_assoc($runQuery1);
    $semester = $rows1['semester'];

    $fetchQuery2 = " SELECT * FROM course WHERE semester = '$semester' ";
    $runQuery2 = mysqli_query($con,$fetchQuery2);

    if($runQuery2 == true){
        while($data = mysqli_fetch_array($runQuery2)){ ?>
            <tr>
            <td><?php echo $data["id"];?></td>
            <td><?php echo $data["name"];?></td>
            <td><?php echo $data["credit"];?></td>
            </tr>
    <?php	}
    } ?>
     
    <br><br><br><br><br><br><br>
    <h1>WELCOME, <?php echo $rows1['name'];?></h1> <br><br>
    <a href="viewResult.php">View Your Marks</a> <br>
    <a href="index.php">Logout</a><br><br>
    Your Current Semester: <?php echo $semester;?> <br> <br> <br>

    <h5>Your Active Courses:</h5> <br>


</body>
</html>