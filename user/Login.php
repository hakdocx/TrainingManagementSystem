<?php
    session_start();
    // include connection file
    require dirname(__DIR__). "../templates/connection.php";

    // login the instructor
    if (isset($_POST['btnLogin'])) {

        // variable declaration
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user_type = $_POST['type'];
        $firstname = " ";
        
        // get students' details from database
        $sql = "SELECT * FROM `account_details` WHERE `username` = '$username' AND `password` = '$password' AND `user_type` = '$user_type'";
        $result = mysqli_query($conn, $sql);

        // if result matched, table row should be 1
        if($row = mysqli_fetch_array($result))
    {

        if ($user_type == "student")
        {
            $_SESSION["username"]=$username;
            $_SESSION["user_type"]="student";
            $_SESSION["firstname"]=$row["firstname"];
            //header("Location: ../index.php");
            header("Location: index.php");
        }
        else if($user_type == "instructor")
        {
            $_SESSION["username"]=$username;
            $_SESSION["user_type"]="instructor";
            $_SESSION["firstname"]=$row["firstname"];
            header("Location: index.php");
        }
        else if ($user_type == "admin") {
            $_SESSION["username"]=$username;
            $_SESSION["user_type"]="admin";
            $_SESSION["firstname"]=$row["firstname"];
            header("Location: index.php");
        }
        else
        {
            $error = "Invalid credentials. Please try again.";
        }

    }else
        {
            $error = "Invalid credentials. Please try again.";

        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/Login_Style.css"/>
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
    </style>
<body>
    <p id="back"><a href = "../user/index.php">&#8592; Go Back</a></p>
        <section class="portal">
            <form class="login-form" method="post" name="login">
                <div class="title">
                    <h1>ACCOUNT LOG IN</h1>
                    <p>Kindly login according to your registered credentials.</p>
                </div>
               
                <span><span class="material-symbols-outlined" style="font-size: 40px;">account_circle</span></span>
                
                <div class="input-field">
                    <input type="text" id="username" name="username" placeholder=" " required>
                    <label for="username">Username</label>
                </div>
                <div class="input-field">
                    <input type="password" id="password" name="password" placeholder=" " required>
                    <label for="password">Password</label>
                </div>
                <div class="input-field">
                    <select name="type" id="type" class="options">
                            <option hidden value="">Select Account Type</option>
                            <option value="student" class="options">Student</option>
                            <option value="instructor" class="options">Instructor</option>
                            <option value="admin" class="options">Admin</option>
                </select>
                </div>
                
                <input type="submit" value="Log in" name="btnLogin" id="login"/>
                <p class="error"><i><?php echo $error; ?></i></p>
                 <p id="register">
                    Don't have an account?
                    <a href="../user/Registration-Form.php"><i>Register here.</i></a>
                </p>
                
               
            </form>
        </section>
    </body>
</html>