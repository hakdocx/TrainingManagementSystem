<br>
<br>
<br>


<?php
    session_start();
    require '../templates/connection.php';
    require '../templates/navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Navigation-Style.css"/>

    <div align="center">
    <br margin:30 >    <?php
        if(isset($_GET['success'])){
            if($_GET['success'] == 'loggedOut'){
                ?>
                    <small class='alert alert-info'>You've been logged out successfully!</small>

                <?php
            }else if($_GET['success'] == 'loggedIn'){
                ?>
                    <small class='alert alert-success'>You've logged in successfully!</small>
                <?php
            }
        }

    ?>
        <br>
        <hr class="line">
        <br>
       <?php

        if(!isset($_SESSION['username'])){
            ?>
                <h2>Kindly login or register an account to start your session.</h2>
            <?php
        }else{
            ?>
                <h3>Hello, <?php echo ucfirst($_SESSION['username']); ?> !</h3>

            <?php
        }
       ?>
    </div>
</body>

<style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-brand {
            margin-right: 16px;
            margin-left: 0px;
        }
    </style>
</html>