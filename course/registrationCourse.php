<?php
require '../templates/header.php';
?>

<!DOCTYPE html>
<html lang="en">
 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registration_course_style.css">
  </head>
 
  <body>
    <div class="box ps-5 mt-5">
      <a class="fs-5 ps-5" href="" style="text-decoration:none; color:white; opacity: 75%;">  
        &#8592; Back to View
      </a>    
      <center>
        <h1 class="page-title-rc">Registration Course</h1>
      </center>
    </div>
    <div class="container-rc pt-3">
      <div class="form-rc">
        <form class="signUp" action="" method="get">
          <div class="form-box-container-rc p-5">
            <div class="form-row-rc">
              <label class="lbl-name-rc fs-5" for='course-title'>Course Registration ID *</label>
              <input class="input-box-rc p-2 fs-5" type="text" name="course_registration" id ='course-title' required>
            </div>
            <div class="form-row-rc mt-4">
              <label class="lbl-name-rc fs-5" for='number-of-days'>Course ID *</label>
              <input class="input-box p-2 fs-5" type="number" name="course_id" id ='number-of-days' required>
            </div>
            <div class="form-row-rc mt-4">
              <label class="lbl-name-rc fs-5" for='mtap-course'>Instructor ID *</label>
              <input class="input-box-rc p-2 fs-5" type="text" name="instructor_id" id ='mtap-course' required>
            </div>
            <div class="form-row-date-rc mt-4">
              <div class="col">
                <label class="lbl-name-rc fs-5" for='mtap-course'>Opening Date *</label>
                <input class="input-box-rc p-2 fs-5" style='width: 100%;' type="date" name="opening_date" id ='Implementation' required>
              </div>
              <div class="col ps-5">
                <label class="lbl-name-rc fs-5" for='mtap-course'>Closing Date *</label>
                <input class="input-box-rc p-2 fs-5" style='width: 100%;' type="date" name="closing_date" id ='Implementation' required>
              </div>
            </div>
            <div class="form-row-rc mt-4">
              <label class="lbl-name-rc fs-5" for='mtap-course'>Implementation NR *</label>
              <input class="input-box-rc p-2 fs-5" type="text" name="implementation" id ='mtap-course' required>
            </div>
            <center>
              <button name="save_student" type="submit" class="btn btn-primary mt-5 fs-5 pe-5 ps-5" style="opacity: 90%;" id="register-btn-rc" >REGISTER</button> 
            </center>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>