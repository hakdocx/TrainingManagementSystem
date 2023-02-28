
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/access-level-style.css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    </style>

	<title>Access Level</title>
</head>
<body>
	<div class="row">
			<form class="access-form" method="post" name="login">
				<h1 class="access-title">WELCOME!</h1>
				<h5 class="access-title">Choose your destination based on your access level.</h5>
				<div class="buttons">
				<input type="submit" value="Student" name="btnStudent" class="access-button" formaction="user/Student-Login.php"/>
				<input type="submit" value="Instructor" name="btnInstructor" class="access-button" formaction="user/Instructor-Login.php"/>
				<input type="submit" value="Administrator" name="btnInstructor" class="access-button" formaction="user/Admin-Login.php"/>
				<p class="register">Create an account? <a href="user/Registration-Form.php">Register here.</a></p>
				</div>
			</form>
	</div>
</body>
</html>