<?php 

	$conn = mysqli_connect('localhost', 'root', '', 'school_system');

	if(!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
 	} 

 ?>