

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body align = 'center'>
<br><br><br><br><br><br><br><br><br>

<br>
Your Result: <br><br>
<?php

require_once("connect.php");
session_start();
$email = $_SESSION['email'];

$fetchQuery = " SELECT * FROM userinfo WHERE email = '$email' LIMIT 1";
$runQuery = mysqli_query($con,$fetchQuery);
$rows = mysqli_fetch_assoc($runQuery);
$name = $rows['name'];
$grade;
$marksQuery = " SELECT bangla, english, math FROM result WHERE name = '$name' ";
$runQuery2 = mysqli_query($con,$marksQuery);
$data = mysqli_fetch_array($runQuery2);
echo "Bangla: $data[0] /100 <br>";
echo "English: $data[1] /100 <br>";
echo "Math: $data[2] /100 <br><br>";
$total = $data[0]+$data[1]+$data[2];
echo "Total: $total /300 <br>";
if($total > 239)    $grade = "A+";
else $grade = "A-";
echo "Your Grade: $grade <br>";
if($grade=="A+") echo "<h3><font color = green><i>CONGRATULATIONS</i></font></h3>";
else echo "<h3><font color = red><i>BETTER LUCK NEXT TIME</i></font></h3>"


?>
<br>
<a href="studentWelcome.php">Go Back</a> <br> <br>
<hr>
</body>
</html>