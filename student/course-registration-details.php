<?php 
	require '../templates/connection.php'; 
	require '../templates/header.php';

	// check whether id parameter exists
	if(!isset($_GET['id'])) {
		header("location: courses.php");
	}
	
	$registrationId = $_GET['id'];

	// check whether id parameter is invalid
	$sql = "SELECT * FROM registration_course WHERE registration_course_id = $registrationId";
	$query = mysqli_connect($con, $sql);
	$registrationCourse = mysqli_fetch_assoc($query);

	if(!$registrationCourse) {
		header("location: courses.php");
	}

?>

</head>
<body>
	<?php require '../templates/navigation.php' ?>
	<h1>Course Title</h1>
	<p>Instructor Full Name</p>
	<p>Opening Date - Closing Date</p>
	<h2>Classes</h2>


	<button class = "btn btn-primary">Add More Classes</button>
</body>