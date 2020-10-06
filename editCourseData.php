<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
</head>
<body>
    
    <?php

        require_once("connect.php");
        if(isset($_REQUEST["id"])){
            $editID = $_REQUEST["id"];
        }
        $fetchQuery = "SELECT * FROM course WHERE id = $editID";
        $runQuery = mysqli_query($con,$fetchQuery);

        while($data = mysqli_fetch_array($runQuery)){ ?>
        <form action = "editCourse.php" method = "GET" align = "center">
	    <br><br><br><br><br><br><br><br><br>
        Course ID: <input type="number" name="id" value = "<?php echo $data["id"];?>"/> <br><br>
	    Name: <input type="text" name="name" value = "<?php echo $data["name"];?>"/> <br> <br>
        Semester: <input type="text" name="semester" value = "<?php echo $data["semester"];?>"/> <br> <br>
        Credit: <input type="text" name="credit" value = "<?php echo $data["credit"];?>"/><br> <br> <br>
	    <input type="submit" name="submitButton" value ="Submit"/> <br> <br>
	    <a href="course.php">Go Back</a> <br>
        <br> 
        </form>
            
     <?php   }


    ?>


</body>
</html>