<?php


	// connect to database
	$conn=mysqli_connect("localhost","root","","project");

	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
		//die(mysqli_error($conn));
	}

 ?>