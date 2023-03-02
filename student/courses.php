<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        body {
            background-color: #FFFCFA;
            font-family: 'Montserrat', sans-serif;
        }

        .container-fluid {
            font-size: 20px;
        }
          
        .container {
            margin: auto;
            text-align: center;
            display:flex;
            margin-top: 20px;
        }
        td .container1{
            margin: 0 auto;
        }
        
        .container1 {
            margin: 0 auto;
            text-align: center;
            display:flex;
        }
        .container1 .deleter, .container1 .updater{
            background-color: #681A1A;
            width: 100px;
            margin: 5px;
            text-align: center;
            justify-content:center;
            padding: 10px;
            border-radius: 5px;

        }
        .click, .UpdateClick{
            
            min-width:100px;
            padding: 10px;
            text-decoration: none;
            color: #f2f2f2;
            width:40px;
        }


        table {
            border-spacing: 0px;
            width: 100%;
            border-radius: 10px;
            outline: 2px solid #DBDBDB;
            margin-top: 75px;
            margin-bottom: 75px;
        }

        th {
          padding: .75em;
          vertical-align: top;
        }

        table td {
            padding: .75em;
            vertical-align: top;
            border: 2px solid #DBDBDB;
            border-left: none; 
            border-right: none;
            border-bottom: none;
            text-align: center;
            overflow: hidden;
        }
        table td:last-child{
            width:100px;
        }
    
        .popup_box{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          border-radius: 5px;
        }
        .popup_box{
          width: 400px;
          background: #f2f2f2;
          text-align: center;
          align-items: center;
          padding: 40px;
          border: 1px solid #b3b3b3;
          box-shadow: 0px 5px 10px rgba(0,0,0,.2);
          z-index: 9999;
          display: none;
        }
        .popup_box i{
          font-size: 60px;
          color: #eb9447;
          border: 5px solid #eb9447;
          padding: 20px 40px;
          border-radius: 50%;
          margin: -10px 0 20px 0;
        }
        .popup_box h1{
          font-size: 30px;
          color: #1b2631;
          margin-bottom: 5px;
        }
        .popup_box label{
          font-size: 23px;
          color: #404040;
        }
        .popup_box .btns{
          margin: 40px 0 0 0;
        }
              .btns .btn1, .btns .btn2{
          background: #681A1A;
          color: white;
          display: block;
          font-size: 18px;
          border-radius: 5px;
          border: 1px solid #808080;
          padding: 10px 13px;
          width: 50%;
          margin: 0 auto;
        }
        .btns a {
          text-decoration: none;
        }
        .btns .btn2{
          margin-bottom: 15px;
          background: #681A1A;
        }
        .btns .btn1:hover{
          transition: .5s;
          background: #ac4141;
        }
        .btns .btn2:hover{
          transition: .5s;
          background: #ac4141;
        }
        .deleter:hover, .updater:hover{
            color: #f2f2f2;
        }


    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script>
// JavaScript function to display confirmation dialog
function confirmDelete(id) {
  sid = id;
}

$(document).ready(function(){
        $('.click').click(function(){
          $('.popup_box').css("display", "block");
        });
        $('.btn1').click(function(){
          $('.popup_box').css("display", "none");
        });
        $('.btn2').click(function(){
          $('.popup_box').css("display", "none");
          window.location.href = "delete.php?id=" + sid;
          alert("Record has been deleted successfully.");
        });
      });

</script>


</head>
<body>
<br><br><br><a href = "index.php" class = "text-decoration-none" style = "font-size:15px; color: #681a1a; margin-left: 10px">&#8592; Back to View</a>
<?php 
  include '../templates/navigation.php'; 
?> 

<div class="container">
<?php
require("../templates/connection.php");

$students = mysqli_query($conn, "SELECT 
c.course_title, 
a.firstname, 
a.lastname, 
r.opening_date, 
r.closing_date,
r.course_reg_id
FROM 
registration_course r
JOIN 
pool_instructor_details p ON p.instructor_id = r.instructor_id
JOIN 
course c ON c.course_id = r.course_id
JOIN 
account_details a ON a.account_id = p.account_id;
");
$j = mysqli_affected_rows($conn);

echo "
<table>
<tr>
<th>COURSE NAME</th>
<th>INSTRUCTOR NAME</th>
<th>Opening Date</th>
<th>Closing Date</th>
<th>View</th>

</tr>";
while($row = mysqli_fetch_assoc($students)){
    
  $cname = $row['course_title'];
  $fname = $row["firstname"];
  $lname = $row["lastname"];
  $opening = $row["opening_date"];
  $closing = $row["closing_date"];


  echo "<tr>";
  echo "<td>$cname</td>";
  echo "<td>$fname $lname</td>";
  echo "<td>$opening</td>";
  echo "<td>$closing</td>";
    echo "<td>
    <div class=container1>
    <div class=deleter>
    <a class=click href='course-registration-details.php?id={$row["course_reg_id"]}'>VIEW</a>
    </div>
    </div>
    
    </td>";
    echo "</tr>";
    echo "<br>";
}


// if(isset($_GET['id'])){

// $id = $_GET['id'];

// $sql = "DELETE FROM student_db WHERE student_id = '$id'";
// mysqli_query($conn,$sql);

// echo "<br><b>Record has been deleted successfully!</b>";

// header("Location: ".$_SERVER['PHP_SELF']);
// exit;
// }

?>
</div>

        <!-- <div class="popup_box">
          <h1>Are you sure you want to delete this record?</h1>
          <div class="btns">
            <a href="#" class="btn2">Yes</a>
            <a href="#" class="btn1">No</a>
          </div> -->

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</div>


</head>
</body>
