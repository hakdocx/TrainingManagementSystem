<?php
	// start session
	session_start();

	// connect to database
	$con = mysqli_connect("localhost","root","","project");

	if($con){
		echo "Congrats you are connected.";
	}
	else {
		die('Connection Failed'. mysqli_connect_error());
	}
?>