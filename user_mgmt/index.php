<?php
    // include('header.php');
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <br>
    <?php
        if(isset($_GET['success'])){
            if($_GET['success'] == 'loggedOut'){
                ?>
                    <small class='alert alert-info'>Logged out successfully </small>
                <?php
            }else if($_GET['success'] == 'loggedIn'){
                ?>
                    <small class='alert alert-success'>Logged in successfully </small>
                <?php
            }
        }



       ?>
        <br>
        <hr>
        <br>
       <?php

        if(!isset($_SESSION['username'])){
            ?>
                <h3>Log in to see account details </h3>
            <?php
        }else{
            ?>
                <h3>Hello <?php echo ucfirst($_SESSION['username']); ?></h3>

            <?php
        }
       ?>
    </div>


</body>
</html>