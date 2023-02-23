<?php
  require '../templates/navigation.php';
?>

<!DOCTYPE html>
<html lang="en">
 
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Management System</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/fc5a762e4d.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JS File -->
    <link rel="stylesheet" href="../assets/css/registration_course_style.css">
  </head>
 
  <body>
    <div class="container">
      <div class="row align-items-center" style="min-height:100%; background-color: white">
        <div class="col">
          <div class="row">
            <a class="fs-5 pe-5 ps-5" href="" style="text-decoration:none; color:#681A1A;">  
              &#8592; Back to View
            </a>
            <h1 class="page-title pt-4 pe-5 ps-5">Course Registration</h1>
          </div>
          <div class="row">
            <div class ="row">
              <div class="form">
                <form class="signUp" action="" method="get">
                  <div class="form-container pe-5 ps-5">
                    <div class="form-row mt-4">
                      <label class="lbl-name fs-5" for='mtap-course'>Instructor ID <label class="asterisk">*</label></label>
                      <input class="input-box p-2 fs-5" type="text" name="instructor_id" id ='mtap-course' required>
                    </div>
                    <div class="form-row-date mt-4">
                      <div class="col me-5">
                        <label class="lbl-name fs-5" for='mtap-course'>Opening Date <label class="asterisk">*</label></label>
                        <input class="input-box p-2 fs-5" style='width: 100%;' type="date" name="opening_date" id ='Implementation' required>
                      </div>
                      <div class="col">
                        <label class="lbl-name fs-5" for='mtap-course'>Closing Date <label class="asterisk">*</label></label>
                        <input class="input-box p-2 fs-5" style='width: 100%;' type="date" name="closing_date" id ='Implementation' required>
                      </div>
                    </div>
                    <div class="form-row mt-4">
                      <label class="lbl-name fs-5" for='mtap-course'>Implementation NR <label class="asterisk">*</label></label>
                      <input class="input-box p-2 fs-5" type="text" name="implementation" id ='mtap-course' required>
                    </div>
                    <div>
                    <button name="save_student" type="submit" class="btn btn-primary mt-5 fs-5 pe-4 ps-4" id="register-btn" >REGISTER</button> 
                    </div>
                  </div>
                </form>
              </div>
            </div>    
          </div>
        </div>

      </div>
    </div>
  </body>
</html>