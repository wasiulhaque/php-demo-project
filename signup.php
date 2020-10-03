<html>
<head>
	<meta charset = "UTF-8">
	<title>Sign Up</title>
</head>
<body> 

<?php

if(isset($_REQUEST["action"])){
	if($_REQUEST["action"] == "true"){
		echo "<font color = 'Green'>Data Inserted Successfully </font>";
	}

	else if($_REQUEST["action"] == "false") {
		echo "Data Not Inserted";
	}
	
}

?>

<form action = "core.php" method = "POST" align = "center">

<br><br><br><br><br><br><br><br><br>
<hr>
<h1>Registration</h1>
	
	<input type="text" name="name" placeholder ="Name"/> <br> <br>
	<input type="text" name="role" placeholder ="Role"/> <br> <br>
	<input type="email" name="email" placeholder ="Email"/> <br> <br>
	<input type="password" name="password" placeholder ="Password"/> <br> <br>
	<input type="submit" name="submitButton" placeholder ="Save Data" value = "Register"/>
	<a href="index.php">Go back</a>
	<br>
	<br>
	<hr>
</form>
	
</body>
</html> 