<?php

ob_start();
include('connection.php');
    if(isset($_POST['btnLogout']))
{
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Button-Style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">

    <style>
    body {
      font-family: 'Montserrat', sans-serif;
    }
    </style>

</head>
<body>
    <header>
        <?php
            include('navigation.php');
        ?>
    </header>

    <div align="center">
       <hr>
            <h3>Update User Information</h3>
       <hr>
        <div class="row">
            <div class="col-md-6 offset-3">
            <?php

                $sql = "SELECT * FROM account_details";
                $records = mysqli_query($con, "SELECT * from account_details WHERE username = '$_SESSION[username]'");

                if($row = mysqli_fetch_assoc($records)) {
                    $username = $row['username'];
                    $password = $row['password'];
                    $lname = $row['lastname'];
                    $fname = $row['firstname'];
                    $mname = $row['middlename'];
                    $suffix = $row['suffix'];


                    echo "<form method=POST enctype=multipart/form-data>
                                        <div class='form-group row'>
                                            <label for=updateUsername>Username</label>
                                            <input type=text name=updateUsername class=form-control value='$username' disabled>
                                        </div>

                                        <div class='form-group row'>
                                            <label for=updatePassword>Password</label>
                                            <input type=password name=updatePassword class=form-control value='$password'>
                                        </div>

                                        <div class='form-group row'>
                                            <label for=updateLname>Last Name</label>
                                            <input type=text name=updateLname class=form-control value='$lname'>
                                        </div>

                                        <div class='form-group row'>
                                            <label for=updateFname>First Name</label>
                                            <input type=text name=updateFname class=form-control value='$fname'>
                                        </div>

                                        <div class='form-group row'>
                                            <label for=updateMname>Middle Name</label>
                                            <input type=text name=updateMname class=form-control value='$mname'>
                                        </div>

                                        <div class='form-group row'>
                                            <label for=updateSuffix>Suffix</label>
                                            <input type=text name=updateSuffix class=form-control value='$suffix'>
                                        </div>

                                        <div class='form-group row'>
                                            <input type=submit name=update  class=btn btn value=Update>
                                        </div>";


                        if(isset($_POST['update'])){

                        // update the user profile

                        $_POST['updateUsername'] = $username;

                        $sql = "update `account_details` set `password` ='$_POST[updatePassword]', `lastname`='$_POST[updateLname]', `firstname`='$_POST[updateFname]',
                        `middlename` = '$_POST[updateMname]', `suffix` = '$_POST[updateSuffix]' WHERE `username` = '$_POST[updateUsername]'";
                        mysqli_query($con, $sql);



                        echo "User Updated Successfully";
                        header("refresh: 1");


                }



 }


                    ?>
                </form>
            </div>

        </div>


    </div>

</body>
</html>