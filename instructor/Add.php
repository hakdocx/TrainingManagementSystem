<!DOCTYPE html>
<html>
  <head>
<title>Pool of Instructors</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" type="text/css" href="../assets/css/instructor_style.css">


  </head>

  <body>
    <?php 
    session_start();
     require '../templates/header.php';
     require '../templates/navigation.php'; 
     ?>


<style>
  .box1 {
  width: auto;
  height: auto;
  padding: 50px;
  margin-top: 75px;
  margin-bottom: 75px;
  border-radius: 10px;
}

form span{
  text-align: center;
  padding: 0 3px;
  font-size: 14px;
  color: #252422;
  text-transform: uppercase;
  font-weight: 600;
  pointer-events: none;
  float: left;
  }

</style>

      <Center> 
    <div class="box1">
          <form action="update_add_data.php" method="post">
            <div class = "col">
              <span>INSTRUCTOR ID</span>
            </div>
              <div class = "col">
                <input type="text" name="id" >
             </div>
            <div class = "col">
              <span>ACCOUNT ID</span>
            </div>
              <div class = "col">
                <input type="text" name="acc_id" >
              </div>

            <div class = "col">
              <span>RANK</span>
            </div>
              <div class = "col">
                <input type="text" name="rank" >
              </div>

            <div class = "col">
              <span>Qualification Degree</span>
            </div>
              <div class = "col">
                <input type="text" name="quadeg">
              </div>

            <div class = "col">
              <span>Course Specialization</span>
            </div>
              <div class = "col">
                <input type="text" name="couspe">
              </div>

            <div class = "col">
              <span>Other Qualification</span>
            </div>
              <div class = "col">
                <input type="text" name="othqua">
              </div>
              <br>
            <div>
              <button type="submit" name="insert" >Add </button>
            </div>
          </form>
      </Center>
    </div>

   </body>
   </html>


 