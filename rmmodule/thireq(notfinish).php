<?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "project";

$connect = mysqli_connect($hostname, $username, $password, $databaseName);
$query = "SELECT * FROM `course`";

$result1 = mysqli_query($connect, $query);

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
			background: #800000;
			color: #fff;
			padding: 16px 30px;
			margin: -20px -25px 10px;
			border-radius: 3px 3px 0 0;
		}
		.table-title h2{
			margin: 5px 0 0;
			font-size: 24px;
		}
	</style>
</head>

<body style="margin: 50px;">
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Course<b>Participants</b></h2>
					</div>
				</div>
			</div>
			<br>
			<?php
		    $conn = mysqli_connect($hostname, $username, $password, $databaseName);

		    if ($conn->connect_error) {
		        die("Connection failed: " . $conn->connect_error);
		    }

		    $sql = "SELECT DISTINCT course.course_title FROM course";
		    $result = $conn->query($sql);

		    if (!$result) {
		        die("Query failed: " . $conn->error);
		    }

		    echo "<select id='search-input'>";
		    echo "<option value='' disable>Select a course</option>";
		    while ($row = $result->fetch_assoc()) {
		        echo "<option value='" . $row["course_title"] . "'>" . $row["course_title"] . "</option>";
		    }
		    echo "</select>";

		    $result = $conn->query($sql);

		    if (!$result) {
		        die("Query failed: " . $conn->error);
		    }


		    $conn->close();
		    ?>

		    <table class="table table-stripped table-hover">
		    	<thead>
					<tr>
						<th>Rank</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Qualification</th>
						<th>Unit/Office</th>
					</tr>
				</thead>
				<br>
				<br>

				<tbody>
				<?php
					$servername = "localhost:3308";
					$username = "root";
					$password = "";
					$database = "databasey";

					// Create connection
					$connection = new mysqli($servername, $username, $password, $database);

					// Check connection
					if ($connection->connect_error) {
						die("Connection failed: " . $connection->connect_error);


					}

					// Read all row from database table
					$sql = "SELECT * FROM student, account_details, registration_participants_class";
					$result = $connection->query($sql);

					if ($result->num_rows > 0) 
    				{

						while($row = $result->fetch_assoc()) {
							echo "<tr>
								<td>". $row["rank"] ."</td>
								<td>". $row["lastname"] ."</td>
								<td>". $row["firstname"] ."</td>
								<td>". $row["middlename"] ."</td>
								<td>". $row["qualification"] ."</td>
								<td>". $row["office_name"] ."</td>
							</tr>";
						}
					}
					else {

        				echo "<br> 0 results";
    				}

    				$connection->close();
				?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>