<<<<<<< HEAD
<?php 

	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn) {
		echo 'Connection error: ' . mysqli_connect_error();
 	} 
=======
<?php
	// start session
    // if(!isset($_SESSION))
    // {
    //     session_start();
    // }
    // else
    // {
    //     session_destroy();
    //     session_start();
	// }

	// connect to database
	$conn=mysqli_connect("localhost","root","","project");

	if(!$conn){
		die(mysqli_error($conn));
	}
>>>>>>> 939ab502b70d8b07ab4ad9c3014fdbface9e8fb2

 ?>