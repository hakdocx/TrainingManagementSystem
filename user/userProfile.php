<?php

ob_start();
require dirname(__DIR__). "../templates/connection.php";
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/Button-Style.css">
        <link rel="stylesheet" href="../assets/css/Navigation-Style.css"/>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 -->        <style>
        body {
          font-family: 'Montserrat', sans-serif;
        }
        </style>

    </head>
    <body>
        <br><br><br><a href = "../user/index.php" class = "text-decoration-none" style = "font-size:15px; color: #681a1a; margin-left: 10px">&#8592; Go Back</a>
        <header>
            <br><br><br>
            <?php
               session_start();
               include '../templates/navigation.php';
            ?>
        </header>

        <div style ="align-items:center; text-align:center;">
                <h2 class="update-user-info">UPDATE USER INFORMATION</h2>

            <div class="row">
                <div class="col-md-6 offset-3">
                <?php
                    //session_start();
                    include '../templates/connection.php';
                    $sql = "SELECT * FROM account_details";
                    $records = mysqli_query($conn, "SELECT * from account_details WHERE username = '$_SESSION[username]'");

                    if($row = mysqli_fetch_assoc($records)) {
                        $username = $row['username'];
                        $password = $row['password'];
                        $lname = $row['lastname'];
                        $fname = $row['firstname'];
                        $mname = $row['middlename'];
                        $suffix = $row['suffix'];

                        echo "<form method=POST enctype=multipart/form-data>
                                <div class='form-group row'>
                                    <label for=updateUsername class=text-field-name>Username</label>
                                    <input type=text name=updateUsername class=form-control value='$username' disabled>
                                </div>
                                <br>
                                <div class='form-group row'>
                                    <label for=updatePassword class=text-field-name>Password</label>
                                    <input type=password name=updatePassword class=form-control value='$password'>
                                </div>
                                <br>
                                <div class='form-group row'>
                                    <label for=updateLname class=text-field-name>Last Name</label>
                                    <input type=text name=updateLname class=form-control value='$lname'>
                                </div>
                                <br>
                                <div class='form-group row'>
                                    <label for=updateFname class=text-field-name>First Name</label>
                                    <input type=text name=updateFname class=form-control value='$fname'>
                                </div>
                                <br>
                                <div class='form-group row'>
                                    <label for=updateMname class=text-field-name>Middle Name</label>
                                    <input type=text name=updateMname class=form-control value='$mname'>
                                </div>
                                <br>
                                <div class='form-group row'>
                                    <label for=updateSuffix class=text-field-name>Suffix</label>
                                    <input type=text name=updateSuffix class=form-control value='$suffix'>
                                </div>
                                <br>
                                <div class='form-group row d-flex align-items-center justify-content-center'>
                                    <input type=submit name=update class=btn btn value=Update style='background-color: #681A1A; width: 25%; color:white;'>
                                </div>";


                            if(isset($_POST['update'])){

                            // update the user profile
                            $_POST['updateUsername'] = $username;

                            $sql = "update `account_details` set `password` ='$_POST[updatePassword]', `lastname`='$_POST[updateLname]', `firstname`='$_POST[updateFname]',
                            `middlename` = '$_POST[updateMname]', `suffix` = '$_POST[updateSuffix]' WHERE `username` = '$_POST[updateUsername]'";
                            mysqli_query($conn, $sql);

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