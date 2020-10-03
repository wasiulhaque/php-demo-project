

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body align = 'center'>
<br><br><br><br><br><br><br><br><br>
Your Result: <br><br>
<?php

require_once("connect.php");
session_start();
$email = $_SESSION['email'];

$fetchQuery = " SELECT * FROM userinfo WHERE email = '$email' LIMIT 1";
$runQuery = mysqli_query($con,$fetchQuery);
$rows = mysqli_fetch_assoc($runQuery);
$name = $rows['name'];

$marksQuery = " SELECT bangla, english, math FROM result WHERE name = '$name' ";
$runQuery2 = mysqli_query($con,$marksQuery);
$data = mysqli_fetch_array($runQuery2);

echo "Bangla: $data[0] <br>";
echo "English: $data[1] <br>";
echo "Math: $data[2] <br>";


?>
<br>
<a href="studentWelcome.php">Go Back</a>
</body>
</html>