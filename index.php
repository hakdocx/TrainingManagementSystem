<?php 

	require 'templates/connection.php'

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Training Management System</title>
	<script type="text/javascript" src = "assets/js/training-form.js" defer></script>
</head>
<body>
	<button id = 'create-training-button'>Create Training</button>
	<dialog id = 'training-form'>
		<div>
			<form method = "POST" action = 'index.php'>
				<br>
				<br>
				<br>
				<br>
				<button type = "submit">Submit</button>
			</form>
		</div>
	</dialog>
</body>
</html>