<?php
	// start session
	session_start();

	// connect to database
	$con=mysqli_connect("localhost","root","","project");

	if($con){
		echo "Congrats you are connected.";
	}
	else {
		die("Failed to connect because ". $mysqli_error());
	}
?>