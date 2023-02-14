<?php
	// include connection file
	require_once "connection.php";

	// variable declaration
	$lname = "";
	$fname = "";
	$mname = "";
	$suffix = "";
	$qdegree = "";
	$rank = "";
	$cspecialization = "";
	$ospecialization = "";
	$username = "";
	$password = "";

	// register instructor
	if (isset($_POST['btnRegister'])) {

		// validate username

		// validate password

		// set user_type to 'Instructor'

		// insert in database
		$sql1 = "INSERT INTO `account_details`(`username`, `password`, `lastname`, `firstname`, `middlename`, `suffix`) values()";
		$sql2 = "INSERT INTO `pool_instructor_details`(`rank`, `qualification_degree`, `course_specialization`, `other_qualification`) values()";
	}

	// close connection
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Login-And-Registration-Style.css"/>
	<title>Login</title>
	<style>
	  * {
	    box-sizing: border-box;
	  }
  </style>
</head>
<body>
	<div class="row">
		<div class="lside">
			<h1 class="usermodule-title">USER MANAGEMENT MODULE</h1>
		</div>

		<div class="rside">
			<form class="rform" method="post" name="login">

				<h1 class="login-title">CREATE ACCOUNT</h1>
				<table>
						<tr>
							<td class="left-table"><input type="text" class="login-input" name="lname" placeholder="Last Name" required/></td>
							<td class="left-table"><input type="text" class="login-input" name="fname" placeholder="First Name" required/></td>
						</tr>
						<tr>
							<td class="right-input"><input type="text" class="login-input" name="mname" placeholder="Middle Name" required/></td>
							<td class="right-input"><input type="text" class="login-input" name="suffix" placeholder="Suffix"/></td>
						</tr>
						<tr>
							<td class="right-input"><input type="text" class="login-input" name="qdegree" placeholder="Qualification Degree" required/></td>
							<td class="right-input"><input type="text" class="login-input" name="rank" placeholder="Rank" required/></td>
						</tr>

						<tr>
							<td class="right-input"><input type="text" class="login-input" name="cspecialization" placeholder="Course Specialization"/>
							<td class="right-input"><input type="password" class="login-input" name="ospecialization" placeholder="Other Specialization" required/></td>
						</tr>

						<tr>
							<td class="left-table"><input type="text" class="login-input" name="username" placeholder="Username" required/></td>
							<td class="right-input"><input type="password" class="login-input" name="password" placeholder="Password" required/></td>
						</tr>
					</table>

						<td><input type="submit" value="Register" name="btnRegister" class="register-button"/></td>
				        <p class="register">Already have an account? <a href="Instructor-Login.php">Log In.</a></p>
			</form>
		</div>
	</div>
</body>
</html>