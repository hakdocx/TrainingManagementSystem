<?php 

	require 'templates/connection.php'

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Training Management System</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type="text/javascript" src = "assets/js/training-form.js" defer></script>
</head>
<body>
	<button id = 'create-training-button'>Create Training</button>
	<dialog id = 'training-form'>
		<form method = "POST" action = 'index.php'>
			<div class="form-container">
				<div class = "form-row">
					<label for = 'course-title'>Course Title*</label>
					<input type="text" name="course-title" id ='course-title' required>
				</div>
				<div class = "form-row">
					<label for = 'number-of-days'>Number of Days*</label>
					<input type="number" name="number-of-days" id ='number-of-days' required>
				</div>
				<div class = "form-row">
					<label for = 'mtap-course'>MTAP Course*</label>
					<input type="text" name="mtap-course" id ='mtap-course' required>
				</div>
				<div class = "form-row">

				</div>
				<div class = "form-row">
					
				</div>
				
				<button type = "submit">Submit</button>
			</div>
		</form>
	</dialog>
</body>
</html>