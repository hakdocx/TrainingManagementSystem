<?php 

	require 'templates/connection.php';
	require 'templates/header.php';

	session_start();

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
	$itemsPerPage = 4;
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

<body>
	<dialog id = 'training-form'>
		<form method = "POST" action = "code.php">
			<div class="form-container">
				<h2> ADD TRAINING FORM </h2>
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
				<div class="table-responsive">
					<button id = 'create-training-button' class= 'button1'> ADD COURSE</button>
					<form method = "GET" action = 'index.php'>
						<div class="form">
								<input 
										type="search" 
										id="myInput"  
										class="form-control form-input" 
										placeholder="Search for training.." 
										name = "search"

										<?php if(isset($_SESSION['search'])) { ?>
											value = "<?= 	$_SESSION['search'] ?>"
										<?php }	?>
								>
						</div>
					</form>
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
								<td>	
								<a href="viewrecord.php?id=<?= $student['course_id']; ?>" class="btn btn-primary">VIEW</a>
								</td>
							</tr>
							<?php }
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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>