<!DOCTYPE html>
<html>
  <head>
<title>Pool of Instructors</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" type="text/css" href="style.css">


  </head>

  <body>
    <?php 
     require '../templates/header.php';
     require '../templates/navigation.php'; 
     ?>

    <header>
    <h1>POOL OF INSTRUCTORS </h1> 
      <div class="homebutton"><a href="instructor_index.php"><span class="material-symbols-outlined">home</span></a>
    </div>
    </header>

    <Center>
    <form action="UpdateAddData.php" method="post">
      <input type="text" name="id" >
      <span>INSTRUCTOR ID</span><br>
      <input type="text" name="acc_id" >
      <span>ACCOUNT ID</span><br>
      <input type="text" name="rank" >
      <span>RANK</span><br>
      <input type="text" name="quadeg">
      <span>Qualification Degree</span><br>
      <input type="text" name="couspe">
      <span>Course Specialization</span><br>
      <input type="text" name="othqua">
      <span>Other Qualification</span><br>
      <div>
      <button type="submit" name="insert" >Add </button>
      </div>
    </form>
    </Center>
   </body>
   </html>


 