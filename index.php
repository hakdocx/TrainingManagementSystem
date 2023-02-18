<?php 

	require 'templates/connection.php';

	// querying displayed data per page

	$itemsPerPage = 4;
	$allItems = mysqli_query($conn, "SELECT * FROM `course`");
	$total = mysqli_num_rows($allItems);
	$totalPages = ceil($total/$itemsPerPage);

	if(isset($_GET['page']) && !empty($_GET['page'])) {
	$page = (int) $_GET['page'];
	} else {
	$page = 1;
	}

	$offset = ($page - 1) * $itemsPerPage;

	$query = "SELECT * FROM `course` LIMIT $itemsPerPage OFFSET $offset";
	$result = mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Training Management System</title>
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <!-- CSS File -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- JS File -->
	<script type="text/javascript" src = "assets/js/training-form.js" defer></script>
</head>
<body>
	<dialog id = 'training-form'>
		<form method = "POST" action = "code.php">
			<div class="form-container">
				<h2> ADD TRAINING FORM </h2>
<<<<<<< HEAD
			<br>
			<div class = "form-row">
				<label style='font-size: 17px;' for = 'course-title'>Course Title*</label>
				<input style='font-size: 17px;' type="text" name="course_title" id ='course-title' required>
			</div>
			<div class = "form-row">
				<label style='font-size: 17px;' for = 'number-of-days'>Number of Days*</label>
				<input style='font-size: 17px;' type="number" name="number_of_days" id ='number-of-days' required>
			</div>
			<div class = "form-row">
				<label style='font-size: 17px;' for = 'mtap-course'>MTAP Course*</label>
				<input style='font-size: 17px;' type="text" name="mtap_course" id ='mtap-course' required>
			</div>
			<div class = "form-row">
				<label style='font-size: 17px;' for = 'mtap-course'>Implementation*</label>
				<input style='font-size: 17px;' type="text" name="implementation" id ='Implementation' required>
			</div>
			<br><br>
			<center>
			<button style='
            font-size: 15px; 
            background-color: #681a1a;  
            height: 35px; 
            border: 1px; 
            border-radius: 5px; 
            width: 25%;
            ' 
            name="save_student" type = "submit" class="btn btn-primary" >Submit</button> 
			</center>
		</form>
	</dialog>
	<div class="container py-5">
		<div class="row py-5">
			<div class="col-lg-10 mx-auto">
				<h1> Course Management </h1><br>
				<div class="card rounded shadow border-0">
					<div class="card-body p-5 bg-white rounded">
						<div class="table-responsive">
							<button id = 'create-training-button' class= 'button1'> <i class="fa fa-plus"></i> ADD COURSE</button>
							<div class="form-group has-search">
								<span class="fa fa-search form-control-feedback"></span>
								<input type="search" id="myInput"  class="fa fa-search icon"   placeholder="Search for training.. " >
							</div>
							<table id="myTable" style="width:100%" class='table borderless'>
								<thead>
									<tr>
										<th>COURSE TITLE</th>
										<th>DURATION</th>
										<th>MTAP COURSE</th>
										<th>YEAR CERTIFIED</th>
										<th>PREREQUISITE</th>
										<th>Action</th>
									</tr>
									</thead>
								<tbody>
								<?php 
									if($total > 0) {
										foreach($result as $student) {
								?>
									<tr>
										<td><?= $student['course_title']; ?></td>
										<td><?= $student['number_of_days']; ?></td>
										<td><?= $student['mtap_course']; ?></td>
										<td></td>
										<td><?= $student['pre_requisite_course']; ?></td>
										<td>Link Here</td>
									</tr>
								<?php 	
										}
									} else {
										echo "<h5> No Record Found </h5>";
									}
								?>
								</tbody>
							</table>
						</div>
						<nav>
							<ul class="pagination">
							<?php if($page > 1) { ?>
								<li class="page-item">
									<a class="page-link" href = "index.php?page=<?php echo $page - 1 ?>">Previous</a>
								</li>
							<?php } ?>
							<?php if($page - 2 > 0) { ?>
								<li class="page-item">
									<a class="page-link" href = "index.php?page=<?= $page - 2 ?>">
										<?= $page - 2 ?>
									</a>
								</li>
							<?php } ?>
							<?php if($page - 1 > 0) { ?>
								<li class="page-item">
									<a class="page-link" href = "index.php?page=<?= $page - 1 ?>">
										<?= $page - 1 ?>
									</a>
								</li>
							<?php } ?>
								<li class="page-item  active">
									<a class="page-link" href = "index.php?page=<?= $page ?>">
										<?=	$page ?>
									</a>
								</li>
							<?php if($page + 1 <= $totalPages) { ?>
								<li class="page-item">
									<a class="page-link" href = "index.php?page=<?= $page + 1 ?>">
										<?= $page + 1 ?>
									</a>
								</li>
							<?php } ?>
							<?php if($page + 2 <= $totalPages) { ?>
								<li class="page-item">
									<a class="page-link" href = "index.php?page=<?= $page + 2 ?>">
										<?= $page + 2 ?>
									</a>
								</li>
							<?php } ?>

							<?php if($page < $totalPages) { ?>
								<li class="page-item">
										<a class="page-link" href = "index.php?page=<?php echo $page + 1 ?>">Next</a>
									</li>
							<?php } ?>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
=======
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-10 mx-auto">
       <div class="card rounded shadow border-0">
          <div class="card-body p-5 bg-white rounded">
            <div class="table-responsive">
              <table id="myTable" style="width:100%" class='table borderless'>
                <button id = 'create-training-button' class= 'button1'> <i class="fa fa-plus"></i> ADD COURSE</button>
                  <div class="form-group has-search">
                    <span class="fa fa-search form-control-feedback"></span>
                      <input type="text" id="myInput"  class="fa fa-search icon" onkeyup="myFunction()"  placeholder="Search for training.. " >
                        </div>
      
                    <thead>
                      <tr>
                        <th style="font-weight:normal">COURSE TITLE</th>
                        <th style="font-weight:normal">DURATION</th>
                        <th style="font-weight:normal">MTAP COURSE</th>
                        <th style="font-weight:normal">YEAR CERTIFIED</th>
                        <th style="font-weight:normal">ACTION</th>
                      </tr>
                    </thead>
                    
                  <tbody>
                    <?php 
                      $query = "SELECT * FROM course";
                      $query_run = mysqli_query($conn, $query);

                      if(mysqli_num_rows($query_run) > 0)
                      {
                        foreach($query_run as $student)
                        {
                            ?>
                            <tr>
                              <td><?= $student['course_title']; ?></td>
                              <td><?= $student['number_of_days']; ?></td>
                              <td><?= $student['mtap_course']; ?></td>
                              <td><?= $student['pre_requisite_course']; ?></td>
                              <td> 
                              <a href="viewrecord.php?id=<?= $student['course_id']; ?>" class="btn btn-primary">VIEW</a>
                              </td>
                            </tr>
                          <?php
                        }
                      }
                            else
                              {
                                echo "<h5> No Record Found </h5>";
                              } 
                          ?>
                          
                  </tbody>
              </table>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
>>>>>>> 9489d3daa9a91ce4bfa246d4c626d023b1001c21
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>