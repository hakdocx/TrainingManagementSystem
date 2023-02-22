<?php 
	require 'templates/connection.php';

	$id = $_POST['id'];
	$sql = "
		UPDATE course 
		SET pre_requisite_course = NULL
		WHERE course_id = $id
	";

	if(mysqli_query($conn, $sql)) {
		header("location: updateCourse.php?id=$id");
	}

 ?>	