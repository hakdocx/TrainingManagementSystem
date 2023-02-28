<?php
	// start session
    if(!isset($_SESSION))
    {
        session_start();
    }
    else
    {
        session_destroy();
        session_start();
	}

	// connect to database
	$con=  mysqli_connect("localhost","root","","project");

	/* if(!$con){
		die("Connection failed: " . $con->connect_error);
	}
 */
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}

	// initialize variables with empty values (for registration & login)
	$error = "";
	$username_err = "";
	$entry_added = "";
	$entry_error = "";
?>
