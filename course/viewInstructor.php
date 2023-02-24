<?php 
  session_start();

	require '../templates/connection.php';
  require '../templates/header.php';
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  else{
    header("Location: index.php");
  }

  $query = "SELECT * FROM `course` WHERE course_id='$id' ";
  $query_run = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($query_run);


  $sql = "
    SELECT 
    a.firstname, a.lastname
    FROM registration_course AS r 
    JOIN pool_instructor_details AS i 
    ON r.instructor_id = i.instructor_id
    JOIN account_details AS a
    ON a.account_id = i.account_id   
    WHERE r.course_id = '$id'
    ";

  $instructors = mysqli_query($conn, $sql);
  

?>

<link rel="stylesheet" type="text/css" href="../assets/css/view_record_style.css">
</head>

<body style = "font-family: Montserrat; overflow-x:hidden; background-color:#fefcfb;">
  <?php include '../templates/navigation.php' ?>
  <?php include('../assets/popup/message.php'); ?>


  <div class = "box m-5 p-5">
    <div class="row p-5" style="background-color: #681a1a; color: white; border-radius: 10px;">
        <h1 style = "font-size: 48px;">
         <?php echo $result['course_title']; ?>
        </h1>
        <h3>
          <i class="fa-regular fa-calendar-days"></i>
        <?php echo $result ['number_of_days'] . " Days"; ?>
        </h3>
    </div>  
    <br><br><a href = "viewRecord.php?id=<?php echo $id ?>" class = "text-decoration-none" style = "font-size:15px; color: #681a1a">&#8592; Back to View</a>  
    <center>
        <div class="row p-5 mt-4" style="background-color: white; border: 1px solid #dbdbdb; border-radius: 10px; width:80%; overflow-y: scroll;" >
                <h4 class="pt-2 pb-4">
                <strong style="float:left;">INSTRUCTORS</strong>
                </h4>  
                <div class ="fs-5 pb-2 fw-bold">
                    <table class='table'>
                            <thead>
                                <tr>
                                    <th class ="fw-normal">NAME</th>
                                    <th class ="fw-normal">QUALIFICATION DEGREE</th>
                                    <th class ="fw-normal">COURSE SPECIALIZATION</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php while ($instructor = mysqli_fetch_assoc($instructors)) { ?>
                                <tr>
                                <td class = "p-4 fs-5 mt-5" ><?= $instructor['firstname'] . " " . $instructor['lastname'] ?></td>
                                <td class = "p-4 fs-5 mt-5" ><?= $instructor['qualification_degree'] ?></td>
                                <td></td>
                                <td></td>
                        
                
                                <td></td>
                                </tr>
                            <?php } ?> 
                        </tbody>
                    </table>  
                </div> 
            </div>
    </center>
        </div>
      </div>
  <script src = "../assets/js/message.js"></script>
  <script src = "../assets/js/delete.js"></script>
</body>
</html>
