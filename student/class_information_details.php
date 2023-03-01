<?php 
  require '../templates/connection.php';
  require '../templates/header.php'; 

  if(!isset($_GET['regId']) && !isset($_GET['classId'])) {
    header("location: courses.php");
  }

  $registrationCourseId = $_GET['regId'];
  $classId = $_GET['classId'];

  $sql = "
    SELECT a.firstname, a.lastname, s.student_id
    FROM account_details a
    JOIN student s
    ON s.account_id = a.account_id
    JOIN registration_participants_class rpc
    ON rpc.student_id = s.student_id
    JOIN registration_course rc
    ON rc.course_reg_id = rpc.course_reg_id
    ";

  $query = mysqli_query($conn, $sql);
  $registeredStudents = mysqli_fetch_assoc($query);


  $sql = "
    SELECT *
    FROM class_information_details
    WHERE class_info_id = $classId
  ";

  $query = mysqli_query($conn, $sql);
  $classInfo = mysqli_fetch_assoc($query);

?>

<style>
  td {
    border: 2px solid #DBDBDB;
    border-left: none; 
    border-right: none;
    border-bottom: none;
  }
</style>
</head>
<body style ="font-family: Montserrat;">
  <?php include "../templates/navigation.php"; ?>
  <div class="container p-5 mt-5">
    <a href="" class="mt-5 pt-5" style="color: #681A1A; text-decoration:none" >
      &#8592; Back to View Course
    </a>
    <h1 class="mt-5 mb-4" style = 'font-size:50px; color: #681A1A; font-weight:700'>
      Class Information Details
    </h1>
    <div class="row w-75 fs-6" style="font-weight:500;">
      <div class="col">
          CLASS ID
      </div>
      <div class="col fw-bold">
          <?= $classInfo['class_info_id'] ?>
      </div>
    </div>
    <div class="row w-75 fs-6" style="font-weight:500;">
      <div class="col">
          LETTER ORDER NUMBER
      </div>
      <div class="col fw-bold">
          <?= $classInfo['letter_order_number'] ?>
      </div>
    </div>
    <div class="row w-75 fs-6" style="font-weight:500;">
      <div class="col">
          GENERAL ORDER
      </div>
      <div class="col fw-bold">
          <?= $classInfo['general_order'] ?>
      </div>
    </div>
    <div class="row w-75 fs-6 mb-5" style="font-weight:500;">
      <div class="col">
          CERTIFICATION CONTROL NUMBER
      </div>
      <div class="col fw-bold">
          <?= $classInfo['cert_ctrl_no'] ?>
      </div>
    </div>
    <div class="row mt-4 mb-4">
      <div class="col-md-auto p-2">
          <button class="btn pe-4 ps-4" style="background-color:#681A1A; border-radius: 10px; color:white; height: 50px;">ADD STUDENT</button>
      </div>
    </div>
    <div class="row w-75 mb-2">
      <h2 class="" style = 'font-size:30px; font-weight: 700'>
        Registered Students
      </h2>
    </div>
    <div class="row w-75 fs-6">
      <div class="col pt-2 pb-2">
        <div class="input-group">
          <span class="input-group-append">
            <span class="btn" id="search-icon" style="opacity: 50%; padding:12px; margin-left: 5px; position:absolute;">
              <i class="fa fa-search"></i>
            </span>
          </span>
          <input class="fs-6 w-100" type="search" id="search-bar" placeholder="Search for student" name='student_name' style="padding: 5px 45px; height:50px; border-radius:10px; border: 2px solid #DBDBDB;">
        </div>
      </div>
    </div>
    <div class="row w-75 fs-6 mt-4">
      <div class="">
        <table class='table' style="border-radius: 10px; outline: 2px solid #DBDBDB;">
            <thead>
                <tr>
                    <th class="ps-3" style="height:50px;">ID</th>
                    <th class="ps-3" style="height:50px;">NAME</th>
                </tr>
            </thead> 
                  
            <tbody>
              <tr>
                <td class="ps-3">12345</td>
                <td class="ps-3">Emman Macaya</td>
              </tr>
              <tr>
                <td class="ps-3">12345</td>
                <td class="ps-3">Emman Macaya</td>
              </tr>
            </tbody>
        </table>  
      </div>
      <div class="row row-cols-2 w-50 mt-4">
        <div class="col-md-auto">
          <button class="btn pe-4 ps-4" style="font-weight: 600; border: 2px solid #681A1A; border-radius: 10px; color:#681A1A; height: 50px;">UPDATE</button>
        </div>
        <div class="col-md-auto">
          <button class="btn pe-4 ps-4" style="font-weight: 600; background-color:#681A1A; border-radius: 10px; color:white; height: 50px;">DELETE</button>
        </div>
      </div>
  </div>
</body>