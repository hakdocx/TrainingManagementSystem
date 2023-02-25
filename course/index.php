<?php 

	require '../templates/connection.php';
	require '../templates/header.php';

	// alter query based on whether search value is present 

	if(isset($_GET['search']) && !empty($_GET['search'])) {
		$_SESSION['search'] = $_GET['search'];	
		$searchQuery = "SELECT * FROM `course` WHERE course_title LIKE '%{$_GET['search']}%' ";
	}  else {
		unset($_SESSION['search']);
		$searchQuery = "SELECT * FROM `course` ";
	}

	// querying displayed data per page

	// edit this to change number of items per page
	$itemsPerPage = 5;
	$allItems = mysqli_query($conn, $searchQuery);
	$total = mysqli_num_rows($allItems);
	$totalPages = ceil($total/$itemsPerPage);

	if(isset($_GET['page']) && !empty($_GET['page'])) {
	$page = (int) $_GET['page'];
	} else {
	$page = 1;
	}

	$offset = ($page - 1) * $itemsPerPage;

	$query = $searchQuery . " LIMIT $itemsPerPage OFFSET $offset";

	$result = mysqli_query($conn, $query);

	function retainSearch() {
		if(isset($_SESSION['search'])) {
			return '&search=' . $_SESSION['search'];
		}
	}

?>

<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>

<body>
	<?php include '../assets/popup/message.php';?>
	<?php include '../templates/navigation.php';?>
	<dialog id ='training-form'>
		<form method = "POST" action = "code.php">
			<div class="form-container">
				<h2> ADD TRAINING FORM </h2>
				<div class = "form-row mt-3">
					<label for = 'course-title' class = "fw-bold" style="color: #5B5B5B">Course Title <span class="asterisk">*</span></label>
					<input style='font-size: 17px;' type="text" name="course_title" id ='course-title' required>
				</div>
				<div class = "form-row mt-2">
					<label for = 'number-of-days' class = "fw-bold" style="color: #5B5B5B" >Number of Days <span class="asterisk">*</span></label>
					<input style='font-size: 17px;' type="number" name="number_of_days" id ='number-of-days' required>
				</div>
				<div class = "form-row mt-2">
					<label for = 'mtap-course' class = "fw-bold" style="color: #5B5B5B">MTAP Course</label>
					<input style='font-size: 17px;' type="text" name="mtap_course" id ='mtap-course'>
				</div>
				<div class = "form-row mt-2">
					<label for = 'mtap-course' class = "fw-bold" style="color: #5B5B5B"> Implementation</label>
					<input style='font-size: 17px;' type="text" name="implementation" id ='Implementation'>
				</div>
				<br>
				<center>
				  <button name="save_course" type = "submit" class="btn btn-primary mt-3" id="submit-btn" >Submit</button> 
        </center>
			</div>
		</form>
	</dialog>

	<div class="container mt-5 pt-5">
		<div class="row">
				<div class="col-2">
    			<button id = 'create-training-button' class= 'button1'> ADD COURSE</button>
				</div>
				<div class="col-3 p-0">
				<button onclick="window.location.href='index.php';" class="button2"> <i class="fa fa-refresh"></i></button>
				</div>
				<div class="form col-10">
					<form method = "GET" action = 'index.php'>
							<input 
									type="search" 
									id="myInput"  
									class="form-control form-input" 
									placeholder="Search for training..." 
									name = "search"

									<?php if(isset($_SESSION['search'])) { ?>
										value = "<?= 	$_SESSION['search'] ?>"
									<?php }	?>
							>
					</form>
				</div>
		</div>
	</div>
  <div class="container my-3">
    <div class="row">
      <div class="col-lg-10 mx-auto">
				<div class="table-responsive">
					<table class='table'>
						<thead>
							<tr>
								<th style='width: 30%'>COURSE TITLE</th>
								<th>DURATION</th>
								<th>YEAR CERTIFIED</th>
								<th>PREREQUISITE</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php 
							if($total > 0) {
								foreach($result as $student) {
						?>
							<tr>
								<td class = "fs-5" ><?= $student['course_title']; ?></td>
								<td class = "fs-5"><?php echo $student['number_of_days'] . " days"; ?></td>
								
								<td class = "fs-5">
									<?php 
										$timestamp = strtotime($student['year_certified']); 
										echo date("Y", $timestamp);
									?>
								</td>
								<td class = "fs-5"> 
								<?php 	 ?>
									<?php 
									if($student["pre_requisite_course"]) { ?>	
										<?php
											$ctr = 0; 	
											$pre_req = $student["pre_requisite_course"];
										while($ctr < 3 && $pre_req) {
											$sql = "SELECT * FROM `course` WHERE course_id = '$pre_req'";
											$query = mysqli_query($conn, $sql);
											$course = mysqli_fetch_assoc($query); ?>
											<?php if($ctr == 2) {
												echo '<br>';
											} ?>
											<span class="badge bg-secondary">
												<?php	echo $course["course_title"];?>
											</span>
											<?php $ctr++;?>
											<?php $pre_req = $course['pre_requisite_course']; ?>
										<?php } ?>
									<?php } ?>
								</td>
								<td class = "fs-5">	
								<a href="viewrecord.php?id=<?= $student['course_id']; ?>" class="btn btn-primary">VIEW</a>
								</td>
							</tr>
							<?php }
								}
							?>
						</tbody>
					</table>
				</div>
				
				<?php
					// Display no course message if no course returned
					if($total == 0) {
						echo 
						'<div class="container h-100 d-flex">
    						<div class="jumbotron my-auto mx-auto">
								<h1 id="noCourseFoundHeading" class="text-center mb-0"> Course not found </h1>
								<p id="noCourseFoundSub" class="text-center mt-0"> No records found in database </p>
    						</div>
						</div>';
					}
				?>
				<nav class = "my-3">
					<ul class="pagination justify-content-center pagination-md">
					<?php if($page > 1) { ?>
						<li class="page-item">
							<a class="page-link" href = "index.php?page=<?= $page - 1 . retainSearch() ?>">
								<i class="fa-solid fa-angle-left"></i>
							</a>
						</li>
					<?php } ?>
					<?php if($page - 2 > 0) { ?>
						<li class="page-item">
							<a class="page-link" href = "index.php?page=<?= $page - 2 . retainSearch() ?>">
								<?= $page - 2 ?>
							</a>
						</li>
					<?php } ?>
					<?php if($page - 1 > 0) { ?>
						<li class="page-item">
							<a class="page-link" href = "index.php?page=<?= $page - 1 . retainSearch() ?>">
								<?= $page - 1 ?>
							</a>
						</li>
					<?php } ?>
						<li class="page-item  active">
							<a class="page-link" href = "index.php?page=<?= $page . retainSearch() ?>">
								<?=	$page ?>
							</a>
						</li>
					<?php if($page + 1 <= $totalPages) { ?>
						<li class="page-item">
							<a class="page-link" href = "index.php?page=<?= $page + 1 . retainSearch() ?>">
								<?= $page + 1 ?>
							</a>
						</li>
					<?php } ?>
					<?php if($page + 2 <= $totalPages) { ?>
						<li class="page-item">
							<a class="page-link" href = "index.php?page=<?= $page + 2 . retainSearch() ?>">
								<?= $page + 2 ?>
							</a>
						</li>
					<?php } ?>
					<?php if($page < $totalPages) { ?>
						<li class="page-item">
							<a class="page-link" href = "index.php?page=<?= $page + 1 . retainSearch() ?>">
								<i class="fa-solid fa-angle-right"></i>
							</a>
						</li>
					<?php } ?>
					</ul>
				</nav>				
			</div>
		</div>
	</div>
	<script type="text/javascript" src = "../assets/js/message.js"></script>
	<script type="text/javascript" src = "../assets/js/training-form.js" defer></script>
</body>
</html>