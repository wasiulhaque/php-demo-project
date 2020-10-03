<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>

<?php

if(isset($_REQUEST["action"])){
	 if($_REQUEST["action"] == "false") {
		echo "<font color = 'red'> Invalid Credentials </font>";
	}	
}
?>

<form action = "logincore.php" method = "POST" align = "center">
	<br><br><br><br><br><br><br><br><br>
    <hr>
    <h1> RESULT MANAGEMENT SYSTEM </h1>
	<input type="email" name="email" placeholder ="Email"/> <br> <br>
	<input type="password" name="password" placeholder ="Password"/> <br> <br>
	<input type="submit" name="submitButton" value ="Login"/>
	<a href="signup.php">Register</a>
    <br> <br>
    <hr>
</form>
    
</body>
</html>