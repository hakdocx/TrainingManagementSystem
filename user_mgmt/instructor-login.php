
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
			<form class="lform" method="post" name="login">
				<table>
					<tr>
						<td><h1 class="login-title">INSTRUCTOR LOGIN FORM</h1></td>
					</tr>
					<tr>
						<td><input type="text" class="login-input" name="studentid" placeholder="Instructor ID" required/></td>
					</tr>
					<tr>
						<td><input type="text" class="login-input" name="username" placeholder="Username" required/></td>
					</tr>
					<tr>
						<td><input type="password" class="login-input" name="password" placeholder="Password" required/></td>
					</tr>
				</table>
				<input type="submit" value="Log in" name="btnLogin" class="login-button"/>
				<p class="register">Create an account? <a href="Instructor-Registration.php">Register here.</a></p>
			</form>
		</div>
	</div>
</body>
</html>