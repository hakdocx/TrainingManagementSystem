<?php

/* $hostname = "localhost:3308";
$username = "root";
$password = "";
$databaseName = "databasey";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `course`";

$result1 = mysqli_query($connect, $query);
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Report Management Module</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<style type="text/css">
		body{
			color: #566787;
			background: #f5f5f5;
			font-family: 'Valera Round', sans-serif;
			
		}
		.table-wrapper{
			background: #fff;
			padding: 20px 25px;
			margin: 30px 0;
			border-radius: 3px;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
		}
		.table-title{
			padding-bottom: 15px;
			background: #681A1A;
			color: #fff;
			padding: 16px 30px;
			margin-top: 20px;
			border-radius: 3px 3px 0 0;
		}
		.table-title h2{
			margin: 5px 0 0;
			font-size: 24px;
		}
	</style>
</head>

<body style="margin: 50px; font-family: Montserrat;">
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Course Participants</h2>
					</div>
				</div>
			</div>
			<br>
			<?php
			session_start();
		    /* $conn = mysqli_connect($hostname, $username, $password, $databaseName);

		    if ($conn->connect_error) {
		        die("Connection failed: " . $conn->connect_error);
		    } */
			require '../templates/connection.php';
			require '../templates/header.php';
			require '../templates/navigation.php';

			//session_start();
		    $sql = "SELECT DISTINCT instructor_id FROM pool_instructor_details";
		    $result = $conn->query($sql);

		    if (!$result) {
		        die("Query failed: " . $conn->error);
		    }

		    $result = $conn->query($sql);

		    if (!$result) {
		        die("Query failed: " . $conn->error);
		    }


		    #$conn->close();
		    ?>

		    <table class="table table-stripped table-hover">
		    	<thead>
					<tr>
						<th>Rank</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Qualification Degree</th>
						<th>Course Specialization</th>
					</tr>
				</thead>
				<br>
				<br>

				<tbody>
				<?php
					/* $servername = "localhost:3308";
					$username = "root";
					$password = "";
					$database = "databasey";

					// Create connection
					$connection = new mysqli($servername, $username, $password, $database);

					// Check connection
					if ($connection->connect_error) {
						die("Connection failed: " . $connection->connect_error);


					} */
					require '../templates/connection.php';
					require '../templates/header.php';
					require '../templates/navigation.php';

					#session_start();
					// Read all row from database table
					$sql = "SELECT * FROM pool_instructor_details Inner Join account_details On pool_instructor_details.account_id = account_details.account_id Inner Join registration_course On registration_course.instructor_id = pool_instructor_details.instructor_id  ";
					$result = $conn->query($sql);

					if (!$result) {
                    die("Query failed: " . $conn->error);
                    }
    				

						while($row = $result->fetch_assoc()) {
							echo "<tr>
								<td>". $row["rank"] ."</td>
								<td>". $row["lastname"] ."</td>
								<td>". $row["firstname"] ."</td>
								<td>". $row["middlename"] ."</td>
								<td>". $row["qualification_degree"] ."</td>
								<td>". $row["course_specialization"] ."</td>
							</tr>";
						}
					
    				#$connection->close();
				?>
				</tbody>
			</table>
		</div>

	</div>
    
</body>
</html>