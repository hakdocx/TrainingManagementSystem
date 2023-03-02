<?php 
session_start();
include "../templates/connection.php";


  if (isset($_POST['submit'])) {
    
    $student_id = $_POST['student_id'];
    $account_id = $_POST['account_id'];
    $rank= $_POST['rank'];
    $office_name = $_POST['office_name'];
    $sql = "INSERT INTO `student`(`student_id`, `account_id`, `rank` , `office_name`) VALUES ('$student_id', '$account_id','$rank','$office_name');";
    $result = $conn->query($sql);
   

    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->connect_error;
    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD PARTICIPANTS</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="./style.css">
    <style>
    * {
        box-sizing: border-box;
        }

        body {

            font-family: 'Montserrat', sans-serif;
        }

        input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        font-family: 'Montserrat';
        font-style: normal;
        }

        label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        }

        input[type=submit] {
        background-color: #681A1A;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        .row1{
            position: absolute;
            left: 46.53%;
            right: 46.53%;
            top:   55.27%;
            bottom: 16.11%;
        }
        .container {
            position: absolute;
            
            width: 1018px;
            height: 699px;
            left: 192px;
            top: 208px;
            border-radius: 5px;
            padding: 20px;
        }

        .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
        }

        .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
        content: "";
        display: table;
        clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
        }
        .add{
            position: absolute;
            left: 39.51%;
            right: 36.11%;
            top: 25.68%;
            bottom: 70.41%;
            text-align: center;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 700;
            font-size: 32px;
            line-height: 5px;
            display: flex;
        }
    </style>
</head>

<body>
<br><br><br><a href = "../student/index.php" class = "text-decoration-none" style = "font-size:15px; color: #681a1a; margin-left: 10px">&#8592; Back to View</a>
    <?php include "../templates/navigation.php"; ?>
    <div class = "add">ADD PARTICIPANT</div>
    <div class="container">
        <fieldset>
        <form action="" method="POST">
            <div class="row">
            <div class="col-25">
                <br><label for="student_id">STUDENT ID</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="student_id" name="student_id" placeholder="Your Student ID.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="account_id">ACCOUNT ID</label><br>
            </div>
            <div class="col-75">
               <br> <input type="text" id="account_id" name="account_id" placeholder="Your Account ID.."><br>
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <br><label for="rank">RANK</label><br>
            </div>
            <div class="col-75">
                <br><select id="rank" name="rank">
                <option value="pco">PCO</option>
                <option value="pnco">PNCO</option>
                <option value="nup">NUP</option>
                </select></br>
            </div>
            <div class="col-25">
               <br> <label for="office_name">OFFICE NAME</label><br>
            </div>
            <div class="col-75">
                <br><input type="text" id="office_name" name="office_name" placeholder="Your Office Name.."><br>
            </div>
            </div>
    
            <div class="row1">
            <INPUT type="submit" value="CREATE" name="submit" id= "submit">
            </div>
        </form>
        </fieldset>
</div>
   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


    </body>
</html>