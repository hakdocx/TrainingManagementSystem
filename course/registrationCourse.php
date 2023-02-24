<?php 

	require '../templates/connection.php';
	require '../templates/header.php';

?>  

<link rel="stylesheet" type="text/css" href="../assets/css/registration_course_style.css">
</head>
 
<body>
  <?php include('../templates/navigation.php');?>
  <div class="container-fluid" id="container">
    <div class="row align-items-center" style="background-color: white">
      <div class="col pe-5 ps-5">
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
                    <label class="lbl-name fs-5 mb-1" for='mtap-course'>Instructor ID <label class="asterisk">*</label></label>
                    <input class="input-box p-2 fs-5" type="text" name="instructor_id" id ='mtap-course' required>
                  </div>
                  <div class="form-row-date mt-5">
                    <div class="col me-5">
                      <label class="lbl-name fs-5 mb-1" for='mtap-course'>Opening Date <label class="asterisk">*</label></label>
                      <input class="input-box p-2 fs-5" style='width: 100%;' type="date" name="opening_date" id ='Implementation' required>
                    </div>
                    <div class="col">
                      <label class="lbl-name fs-5 mb-1" for='mtap-course'>Closing Date <label class="asterisk">*</label></label>
                      <input class="input-box p-2 fs-5" style='width: 100%;' type="date" name="closing_date" id ='Implementation' required>
                    </div>
                  </div>
                  <div class="form-row mt-5 mb-3">
                    <label class="lbl-name fs-5 mb-1" for='mtap-course'>Implementation NR <label class="asterisk">*</label></label>
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