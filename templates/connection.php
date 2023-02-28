
<?php
	//start session
/*     if(!isset($_SESSION))
     {
         session_start();
    }
    else{
         session_destroy();
         session_start();
	}
 */
	$conn = mysqli_connect('localhost', 'root', '', 'project');

	if(!$conn){
		echo 'Connection error: ' . mysqli_connect_error();
		//die(mysqli_error($conn));
	}

    	// initialize variables with empty values (for registration & login)
	$error = "";
	$username_err = "";
	$entry_added = "";
	$entry_error = "";
 ?>