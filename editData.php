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
        $fetchQuery = "SELECT * FROM result WHERE id = $editID";
        $runQuery = mysqli_query($con,$fetchQuery);

        while($data = mysqli_fetch_array($runQuery)){ ?>
        <form action = "editResultDB.php" method = "GET" align = "center">
	    <br><br><br><br><br><br><br><br><br>
        Name of the Student: <input type="text" name="name" value = "<?php echo $data["name"];?>"/> <br><br><br>
        Course ID: <input type="number" name="courseid" value = "<?php echo $data["courseid"];?>"/> <br><br><br>
	    Mid-term Mark: <input type="number" name="mid" value = "<?php echo $data["mid"];?>"/> / 50 <br> <br>
        Final Mark: <input type="number" name="final" value = "<?php echo $data["final"];?>"/> / 150 <br> <br>
	    <input type="submit" name="submitButton" value ="Submit"/> <br> <br>
	    <a href="editResult.php">Go Back</a> <br>
        <br> 
        </form>
            
     <?php   }


    ?>


</body>
</html>