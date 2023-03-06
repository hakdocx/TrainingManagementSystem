<?php
    // include connection file
    require dirname(__DIR__). "../templates/connection.php";

    // register the instructor
    if (isset($_POST['btnRegister'])) {

        // variable declaration
        $username = $_POST['username'];
        $password = $_POST['password'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $suffix = $_POST['suffix'];
        $user_type = $_POST['type'];

        $check_uid = "select * from account_details order by account_id desc limit 1";
        $checkresult = mysqli_query($conn,$check_uid);

        // validate username
        if (empty(trim($_POST['username']))) {
            $username_err = "Please enter a username.";     // if username is empty
            }

        elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', trim($_POST["username"]))) {                  // if username contains special characters
            $username_err = "Username can only contain an email.";
            }

        else {
            $sql = "SELECT account_id FROM account_details WHERE username = ?"; // if username is already taken

            if($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                $param_username = trim($_POST["username"]);

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                    if (mysqli_stmt_num_rows($stmt) == 1) {
                        $username_err = "This username is already taken.";
                    }

                    else {
                        $username = trim($_POST["username"]);
                    }
                }
                mysqli_stmt_close($stmt);                                                                                                               // close statement
            }
        }

        // validate user_type
    if (empty($_POST['type'])){
            $error = 'Select a user type.';
        }

        // check input errors before inserting in database
        if(empty($username_err)  && empty($pass_1d) && empty($pass_1sc) && empty($pass_ws) && empty($error)) {


            if($row = mysqli_fetch_array($checkresult))

            {
                $sql = "INSERT INTO account_details (username, password, user_type, lastname, firstname, middlename, suffix) VALUES ('$username','$password', '$user_type', '$lname', '$fname', '$mname', '$suffix')";
                $result = mysqli_query($conn, $sql);
                if($result)
                {
                    $entry_added = "You have been registered successfully. Please login to continue.";
                }
            }


    }
}
    // close connection
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../assets/css/Register_Style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<style>
    body {
      font-family: 'Montserrat', sans-serif !important;
    }

    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 48
    }

    </style>.
<body>
	<p id="back"><a href = "../user/index.php">&#8592; Go Back</a></p>
        <section class="portal">
            <form class="registration-form" method="post" name="login">
                <div class="title">
                    <h1>REGISTER ACCOUNT</h1>
                    <p>Kindly fill in the form below and complete the required field/s.</p>
                </div>
               
                <span><span class="material-symbols-outlined" style="font-size: 40px;">app_registration</span></span>
                <div class="row">
                    <div class="column">
                        <div class="left-column">
                            <div class="input-field">
                                <input class="left-column" type="text" id="lname" name="lname" placeholder=" " required style="margin-bottom: 15px;"/>
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="input-field">
                                <input class="left-column" type="text" id="middlename" name="mname" placeholder=" " style="margin-bottom: 15px;"/>
                                <label for="mname">Middle Name</label>
                            </div>
                            <div class="input-field">
                                <input class="left-column" type="text" id="username" name="username" placeholder=" " required style="margin-bottom: 0px;"/>
                                <label for="username">Username</label>
                            </div>
                        </div>
                    </div>

                    <div class="column">
                        <div class="right-column">
                            <div class="input-field">
                                <input class="right-column" type="lastname" id="fname" name="fname" placeholder=" " required style="margin-bottom: 15px;"/>
                                <label for="fname">First Name</label>
                            </div>     
                            <div class="input-field">
                               <input class="right-column" type="text" id="suffix" name="suffix" placeholder=" " style="margin-bottom: 15px;">
                                <label for="suffix">Suffix</label></td>
                            </div>
                            <div class="input-field">
                                <input class="right-column" type="password" id="password" name="password" placeholder=" " required style="margin-bottom: 0px;">
                                <label for="password">Password</label></td>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-field">
                    <select name="type" id="type" class="options">
                        <option hidden value="">Select Account Type</option>
                        <option value="student" class="options">Student</option>
                        <option value="instructor" class="options">Instructor</option>
                        <option value="admin" class="options">Admin</option>
                    </select>
                </div>
                
                <input type="submit" value="Register" name="btnRegister" id="login" style="margin-bottom: 0;"/>
                <p class="error"><i><?php echo $entry_added; ?>
                                 <?php echo $username_err; ?> <br>
                                 <?php echo $error; ?>
                </i></p>
                <p id="register">
                    Already have an account?
                    <a href="../user/Login.php"><i>Log In.</i></a>
                </p>
                
                
            </form>
        </section>
    </body>
</html>