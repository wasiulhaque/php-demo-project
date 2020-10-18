<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register to RMS</title>
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-02.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action = "core.php" method = "POST">
					<span class="login100-form-title">
						Registration
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					



					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
					<label for="role"><font color = grey> Select Your Role </font></label><select name="role" id="role">
					<option value = "Teacher">Teacher</option>
					<option value="Student">Student</option> </select>
						<span class="focus-input100"></span>
					</div>
					


					<div class="wrap-input100 validate-input">
					<label for="semester"><font color = grey>Select Your Semester</font></label> <select name="semester" id="semester">
					<option value="0">N/A</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>
				</form>
				<form action="index.php">
				<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Return Home
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>








<!--<html>
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
	<label for="role">Select Your Role</label><select name="role" id="role">
	<option value = "Teacher">Teacher</option>
	<option value="Student">Student</option> </select> <br><br>
	<label for="semester">Select Your Semester (If Student)</label> <select name="semester" id="semester">
	<option value="0">N/A</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	</select> <br><br>
	<input type="email" name="email" placeholder ="Email"/> <br> <br>
	<input type="password" name="password" placeholder ="Password"/> <br> <br>
	<input type="submit" name="submitButton" placeholder ="Save Data" value = "Register"/>
	<a href="index.php">Go back</a>
	<br>
	<br>
	<hr>
</form>

	
</body>
</html> !-->