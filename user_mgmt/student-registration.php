
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
							<td class="right-input"><input type="text" class="login-input" name="rank" placeholder="Rank" required/></td>
							<td class="right-input"><input type="text" class="login-input" name="officename" placeholder="Office Name" required/></td>
						</tr>

						<tr>
							<td class="left-table"><input type="text" class="login-input" name="username" placeholder="Username" required/></td>
							<td class="right-input"><input type="password" class="login-input" name="password" placeholder="Password" required/></td>
						</tr>
					</table>
						
						<td><input type="submit" value="Register" name="btnRegister" class="register-button"/></td>
				        <p class="register">Already have an account? <a href="Student-Login.php">Log In.</a></p>
			</form>
		</div>
	</div>
</body>
</html>