<?php 
	require 'templates/connection.php';

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }
  else{
    header("Location: index.php");
  }

  $query = "SELECT * FROM `course` WHERE course_id='$id' ";
  $query_run = mysqli_query($conn, $query);
  $result = mysqli_fetch_assoc($query_run);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Management System</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/update_course_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body style="font-family: Montserrat; overflow-x:hidden; background-color:#fffcfa">
  <div class="box">
    <div class="row" style="background-color: #681a1a; color: white; padding-left:100px; padding-top:70px;">
        <h6>
          &#8592; Back to View
        </h6>
    </div>
    <div class="container mt-4 pb-5 pe-5 ps-5" style="background-color:#fffcfa;">
      <h1 style="color:#681a1a">
        <strong>Update Course</strong>
      </h1>
        <div class="row mt-1">
          <div class="col me-5">
            <form method = "POST">
              <div class="row-box">
                <label style='font-size: 15px; font-weight:bold;' for='course-title'>Course Title <label class="asterisk"> *</label></label>
                <input style='font-size: 15px;' value = "<?php echo $result['course_title'] ?>" type="text" name="course_title" id='course-title' required>
              </div>
              <div class="row-box">
                <label style='font-size: 15px; font-weight:bold;' for='number-of-days'>Number of Days to Complete <label class="asterisk"> *</label></label>
                <input style='font-size: 15px;' value = "<?php echo $result['number_of_days'] ?>" type="number" name="number_of_days" id='number-of-days' required>
              </div>
              <div class="row-box">
                <label style='font-size: 15px; font-weight:bold;' for='implementation'>Implementation <label class="asterisk"> *</label></label>
                <input style='font-size: 15px;' value = "<?php echo $result['implementation'] ?>" name="implementation" id='implementation' rows="3" required></input>
              </div>
              <div class="row-box">
                <label style='font-size: 15px; font-weight:bold;' for='mtap-course'>MTAP Course <label class="asterisk"> *</label></label>
                <input style='font-size: 15px;' value = "<?php echo $result['mtap_course'] ?>" name="mtap_course" id='mtap-course' rows="3" required></input>
              </div>
              <button type = "button" class = "save-changes-btn mt-4">
                Save Changes
              </button>
            </form>
          </div>
          <div class="col">
            <form method = "POST" action = "updateCourse.php?id=<?= $id ?>">
              <div class="row-box">
                <label style='font-size: 15px; font-weight:bold;'>Course Prerequisites <label class="asterisk"> *</label></label>
                <div class="row">
                  <div class="input-group">
                    <span class="input-group-append">
                      <span class="btn" id="search-icon">
                            <i class="fa fa-search"></i>
                      </span>
                    </span>
                    <input type="search" id="search-input" placeholder="Enter course name or id" name = 'course'>
                  </div>
                </div>
              </div>
            </form>
            <div class = "overflow-auto" style = 'max-height:300px'>
            <?php 
              if(isset($_POST['course'])) {
                $course = $_POST['course'];
                $sql = "
                  SELECT * 
                  FROM course
                  WHERE course_title LIKE '%$course%' 
                  OR course_id = '$course'; 
                  ";
                $query = mysqli_query($conn, $sql);
                

                while($course = mysqli_fetch_assoc($query)) { ?>
                  <div class="row-box pt-3" style="background-color:#e8dad9; border-radius: 10px; padding: 8px; padding-left: 15px;text-align:left;">
                    <h6><?= $course['course_id'] . " - " . $course['course_title'] ?></h6>
                  </div>
                <?php } ?>
              <?php } ?>
            </div>
          </div>
        </div>    
      </div>
    </div>
  </body>
</html>