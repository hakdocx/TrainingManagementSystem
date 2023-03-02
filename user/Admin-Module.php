<?php

ob_start();
require dirname(__DIR__).('../templates/connection.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Button_Style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        body {

          font-family: 'Montserrat', sans-serif;
        }

        .row{
            margin-left: 0px;
            margin-right: 0px;
        }

        .btn2{
            margin-left: 80px;
            background-color: #681a1a;
            color: white;
            padding: 10px 5px 10px 25px;
            border-radius: 6px;
            border: none;
            width: 10%;
            font-size: 18px;

        }

        .btn2:hover{
            background-color: #4a0b0b;
            color: #fffcfa;
            text-decoration: none;

        }

        .Icon-inside{
            position: relative;
        }

        .Icon-inside i {
            position: absolute;
            left: 100px;
            top: 8px;
            padding: 6px 20px;
            color: #fff;
            margin-left: -9px;
            opacity: 90%;
        }

    </style>


</head>
<br>
<br>

<body>
<header>
    <?php
        session_start();
        #require dirname(_DIR_).('navigation.php');
        //require '../navigation.php';
        require '../templates/navigation.php';
    ?>
</header>
<br>

<form method=POST>
        <div class="Icon-inside">
            <div  margin-left="80px;" class='row col offset-1'>
            <i class="fa fa-arrow-left fa-1x" aria-hidden="true"></i>
            <input type=submit name=go_back class=btn2 value="Go Back">
                </form>
                          <?php
                        if (isset($_POST['go_back'])) {
                            header("location: index.php");
                        }
                        ?>
                     </div>
        </div>
<br>
    <div class="container">
        </button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Account ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">User Type</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Middle Name</th>
                    <th scope="col">Suffix</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $sql = "Select * from `account_details`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $account_id = $row['account_id'];
                        $username = $row['username'];
                        $password = $row['password'];
                        $user_type = $row['user_type'];
                        $lastname = $row['lastname'];
                        $firstname = $row['firstname'];
                        $middlename = $row['middlename'];
                        $suffix = $row['suffix'];
                        echo ' <tr>
                    <th scope="row">' . $account_id . '</th>
                    <td>' . $username . '</td>
                    <td>' . $password . '</td>
                    <td>' . $user_type . '</td>
                    <td>' . $lastname . '</td>
                    <td>' . $firstname . '</td>
                    <td>' . $middlename . '</td>
                    <td>' . $suffix . '</td>
                    <td>
                    <button type="submit" class="btn btn"><a href="Admin-Update.php?
                    updateid='.$account_id.'" class="text-light" style="text-decoration:none">Update</a></button>
                    </td>
                    </tr>';
                    }

                }

                ?>

            </tbody>
        </table>

    </div>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .navbar-brand {
            margin-right: 16px;
            margin-left: 0px;
        }
    </style>

</body>

</html>