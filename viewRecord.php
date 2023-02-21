<?php 
	require 'templates/connection.php';
  require 'templates/header.php';
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

<dialog id = 'deleteForm'>
  Delete This ?
</dialog>
<body style = "font-family: Montserrat; overflow-x:hidden; background-color:#fefcfb;">
  <div class = "box">
    <div class="row pb-3" style="background-color: #681a1a; color: white; padding-left:100px; padding-top: 60px;">
        <a href="index.php" style="text-decoration:none; color:white;">
          &#8592; Back to View
        </a>
        <h1 style = "font-size: 48px;">
         <?php echo $result['course_title']; ?>
        </h1>
        <h5>
          #
        <?php echo $result ['number_of_days'] . " Days"; ?>
        </h5>
    </div>      
    <div class="container mt-2 p-5" style="background-color:#fefcfb;;">
      <div class="row">
        <div class="col-7 me-4" style="background-color:#fefcfb;">
          <div class="row mb-4 p-3" style="background-color: white; border: 1px solid #dbdbdb; border-radius: 10px;">
            <h4>
              <strong>IMPLEMENTATION</strong>
            </h4>
            <p>
              <?php echo $result['implementation']?>
            </p>
          </div>
          
          <div class="row mb-4 p-3" style="background-color: white; border: 1px solid #dbdbdb; border-radius: 10px;">
            <h4>
              <strong>MTAP COURSE</strong>
            </h4>
            <p>
              <?php echo $result['mtap_course']?>
            </p>
          </div>

        <div class="row mb-4 p-3" style="background-color: white; border: 1px solid #dbdbdb; border-radius: 10px;">
          <h4>
            <strong>PREREQUISITES</strong>
          </h4>
          <ul style="padding-left:30px;">
            <?php 
                $pre_req = $result["pre_requisite_course"];
                while($pre_req) {
                  $sql = "SELECT * FROM course WHERE course_id = '$pre_req'";
                  $query = mysqli_query($conn, $sql);
                  $course = mysqli_fetch_assoc($query);
                ?>
                  <li>
                    <a class="fw-bold" href style="color:#9D2426;"><?= $course['course_title'] ?></a>
                  </li>
                <?php 
                  $pre_req = $course['pre_requisite_course'];
                }
                ?>
            <?php ?>
          </ul>
        </div>

          <div class="row mt-5">
            <div class="col-2 me-4 p-0">
              <a href="updateCourse.php?id=<?php echo $id ?>" type="button" class="update-btn" style="
                      border: 2px solid #681a1a;
                      background-color: #fffcfa;
                      text-align: center;
                      color: #681a1a;
                      padding: 10px;
                      padding-left: 30px;
                      padding-right: 30px;
                      border-radius: 10px;
                      font-weight: bold;
                      text-decoration: none;
                      "
              >UPDATE</a>
            </div>
            <div class="col-2 p-0">
              <button type="button" class="del-btn"
                      style="
                      border: 2px solid #681a1a;
                      background-color: #681a1a;
                      text-align: center;
                      color:white;
                      padding: 10px;
                      padding-left: 30px;
                      padding-right: 30px;
                      border-radius: 10px;
                      font-weight:bold;
                      "
                      id = "deleteBtn"
              >DELETE</button>
            </div>
          </div>
        </div>
        <div class="col" style="background-color:#fefcfb;">
          <div class="row p-3" style="background-color: white; border: 1px solid #dbdbdb; border-radius: 10px;" >
            <h4>
              <strong>INSTRUCTORS</strong>
            </h4>
            <p>
              Content here.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src = "assets/js/delete.js"></script>
</body>
</html>
