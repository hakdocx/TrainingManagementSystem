<?php 

	require 'templates/connection.php';
	
	if(!isset($_POST['prerequisite_id'])) {

		header("location: index.php");
	}

	$id = $_GET['id'];
	$prereq = $_POST['prerequisite_id'];
 
	$sql = "
		UPDATE `course` 
		SET pre_requisite_course = $prereq 
		WHERE course_id = $id";  

	$query = mysqli_query($conn, $sql);

	if($query) {
		header("location: updateCourse.php?id=$id");
	}

 ?>