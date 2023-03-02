<?php
    #require dirname(__DIR__).("/templates/connection_2.php");
    //session_start();
    require '../templates/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
>>>>>>> d002a61dc3e665c62a300d60e31b6087fe8790cb
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/Navigation-Style.css"/>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body>
    <header>
        <?php
            session_start();
            #require dirname(__DIR__).('navigation.php');
            //require '../navigation.php';
            require '../templates/navigation.php';
        ?>
    </header>

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
</html>