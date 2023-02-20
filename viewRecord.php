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
<body style = "font-family: Montserrat; overflow-x:hidden; background-color:#fffcfa;">
  <div class = "box">
    <div class="row pb-3" style="background-color: #681a1a; color: white; padding-left:100px; padding-top: 60px;">
        <h1 style = "font-size: 48px;">
         <?php echo $result['course_title']; ?>
        </h1>
        <h6>
          #
        <?php echo $result ['number_of_days'] . " Days"; ?>
        </h6>
    </div>      
    <div class="container mt-2 p-5" style="background-color: #fffcfa;">
      <div class="row">
        <div class="col-7 me-4" style="background-color: #fffcfa;">
          <div class="row mb-4 p-3 shadow border-0">
            <h4>
              <strong>IMPLEMENTATION</strong>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>
          
          <div class="row mb-4 p-3 shadow border-0">
            <h4>
              <strong>MTAP COURSE</strong>
            </h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
          </div>

        <div class="row mb-4 p-3 shadow border-0">
          <h4>
            <strong>PREREQUISITES</strong>
          </h4>
          <p>
            Content here.
          </p>
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
        <div class="col" style="background-color: #fffcfa;">
          <div class="row shadow border-0 p-3">
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
