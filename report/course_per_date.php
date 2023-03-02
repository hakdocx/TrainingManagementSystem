<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Course Report</title>
	<style>
		*{
            font-family: 'Montserrat', sans-serif;
        }
		
		nav {
			margin: 0;
		}
		table {
			margin: auto;
			border-collapse: collapse;
			outline: 1px solid black;
			border-radius: 10px;
		}
		td {
			border: 1px solid black;
			border-bottom: none;
			border-right: none;
			border-left: none;
			padding: 5px;
			padding-right: 20px;
		}
		th {
			padding: 5px;
		}

		header{
				background-color: #681a1a;
				background-size: cover;
				height: 60px;
				margin-top: 60px;
				padding: 15px;
		}

		header h1 {
				font-size: 20px;
				padding: 2px;
				color: #ffe000;
		}
		#search-input {
			background-color: maroon;
			color: #f0ece2; 
			font-size: 15px;
			border: 2px solid black;
			padding: 5px;
			margin-top: 20px;
			margin-bottom: 20px;
			border-radius: 120px;
			height: 40px;
			width: 90px;
			transition: opacity 1s;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8)  ;
    }

		center {
			font-size: 14px;
		}
		/** type submit margin top */
		.button{
			margin-top: 20px;
		}
		
        .homebutton{
             float: right ;
             margin-top: -35px;
             margin-right: 30px;
        }

        .homebutton a {
             text-decoration: none;
         color: #ffe000;

        }
		#start_date{
			float: center;
		}
		#end_date{
			float: center;
		}

	</style>
</head>
<body>
	<?php
	session_start();
	//require '../templates/header.php';
	require '../templates/navigation.php';
	?>
	<header>
	<?
	//session_start();
	//require '../templates/navigation.php';
	?>
	<center>
	<strong> <h1>Course Report</h1> </strong>
	<div class="homebutton">
        <a href="index.php"><span class="material-symbols-outlined">HOME</span></a>
    </div>

	</header>

	<div class="chas">
		<center>
		<form action="" method="post"> <br> <br> <br>
			<label for="start_date"> Start Date:</label>
			<input type="date" name="start_date" id="start_date">
			<br>
			<br>
			<label for="end_date">End Date:</label>
			<input type="date" name="end_date" id="end_date">
			<br>
			<input class="button" type="submit" value="Generate Report">
		</center>	
		</form>
	</div>
		<center>
		<br>
		<?php
		require '../templates/connection.php';
		if (isset($_POST["start_date"]) && isset($_POST["end_date"])) {
			/* // Set the database connection parameters
			$servername = "localhost:3308";
			$username = "root";
			$password = "";
			$dbname = "databasey";

			// Create a database connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check for errors
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} */

			#session_start();
			// Check if the user is logged in, if not then redirect him to login page
			/* if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
				header("location: login.php");
				exit;
			} */
			// Get the start and end dates from the user
			$start_date = $_POST["start_date"];
			$end_date = $_POST["end_date"];

			// Construct the SQL query
			$sql = "SELECT course.course_title, CONCAT(registration_course.opening_date, ' - ', registration_course.closing_date) AS inclusive_dates, COUNT(*) AS total
					FROM registration_course
					JOIN course ON registration_course.course_id = course.course_id
					WHERE registration_course.opening_date BETWEEN '$start_date' AND '$end_date' OR registration_course.closing_date BETWEEN '$start_date' AND '$end_date'
					GROUP BY registration_course.course_id";

			// Execute the query
			$result = $conn->query($sql);

			// Check for errors
			if ($conn->error) {
				die("Query failed: " . $conn->error);
			}

			// Print the report table
			echo "<table>";
			echo "<tr><th>Course Title</th><th>Inclusive Dates</th><th>Total</th></tr>";

			// Print the report data
			while ($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["course_title"] . "</td><td>" . $row["inclusive_dates"] . "</td><td>" . $row["total"] . "</td></tr>";
			}

			// Close the database connection
			$conn->close();
		}
		?>
		</center>
		</center>
</body>
</html>
