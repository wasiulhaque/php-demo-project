<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Page</title>
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
    <h1>WELCOME, <?php echo $rows1['name'];?></h1>
    <a href="viewResult.php">View Your Marks</a> <br> <br>
    <a href="index.php">Logout</a><br><br>
    <hr><br>
    Your Current Semester: <?php echo $semester;?> <br>

    Your Active Courses: <br>


</body>
</html>