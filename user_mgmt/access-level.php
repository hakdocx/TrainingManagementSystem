
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Access-Level-Style.css"/>
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
						<td><h1 class="login-title">Welcome!</h1></td>
					</tr>
					<tr>
						<td><h5 class="login-title">Choose your destination based on your access level.</h5></td>
					</tr>

					<tr>
						<td><input type="submit" value="Student" name="btnStudent" class="access-button"
								   formaction="Student-Login.php"/></td>
					</tr>
					<tr>
						<td><input type="submit" value="Instructor" name="btnInstructor" class="access-button"
							 	   formaction="Instructor-Login.php"/></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>