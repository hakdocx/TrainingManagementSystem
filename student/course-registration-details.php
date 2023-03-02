
<?php 
	require '../templates/connection.php'; 
	require '../templates/header.php';

	// check whether id parameter exists
	if(!isset($_GET['id'])) {
		header("location: courses.php");
	}

	$registrationId = $_GET['id'];

	if(isset($_POST['add-class'])) {
		$letterOrderNumber = mysqli_real_escape_string($conn, $_POST['letter-order-number']);
		$generalOrder = mysqli_real_escape_string($conn, $_POST['general-order']);
		$certCtrlNum = mysqli_real_escape_string($conn, $_POST['cert-ctrl-no']);

		// $sql = "
		// 	SELECT * FROM class_information_details 
		// 	WHERE letter_order_number = $letterOrderNumber && general_order = $generalOrder && cert_ctrl_no = $certCtrlNum 
		// ";
		// $query = mysqli_query($conn, $sql);
		// $class = mysqli_fetch_assoc($query);

		// if(!$class) {
		$sql = "
			INSERT INTO class_information_details (letter_order_number, general_order, cert_ctrl_no) 
			VALUES ($letterOrderNumber, $generalOrder, $certCtrlNum)
		";
		$query = mysqli_query($conn, $sql);

		if($query) {
			header("location: course-registration-details.php?id=$registrationId");
		} else {
			echo "Didnt do squat";
		}	
	} 

	// check whether id parameter is invalid
	$sql = "SELECT * FROM registration_course WHERE course_reg_id = $registrationId";
	$query = mysqli_query($conn, $sql);
	$registrationCourse = mysqli_fetch_assoc($query);

	if(!$registrationCourse) {
		header("location: courses.php");
	}

	// get course name and other deets sheeeesh
	$course_query = "SELECT 
						course.course_title, 
						instructor.firstname, 
						instructor.lastname, 
						registration_course.opening_date, 
						registration_course.closing_date,
						course.course_id,
						pool_instructor_details.instructor_id
					FROM registration_course 
					JOIN course ON registration_course.course_id = course.course_id 
					JOIN pool_instructor_details ON registration_course.instructor_id = pool_instructor_details.instructor_id 
					JOIN account_details AS instructor ON pool_instructor_details.account_id = instructor.account_id 
					WHERE registration_course.course_reg_id = " . $registrationId;
	$query = mysqli_query($conn, $course_query);
	$row_account = mysqli_fetch_assoc($query);


	$sql = "
		SELECT c.*
		FROM class_information_details c 
		LEFT 
		JOIN registration_participants_class rpc 
		ON rpc.class_info_id = c.class_info_id 
		WHERE rpc.class_info_id IS NULL 
	";
	$query = mysqli_query($conn, $sql);
	
	$classes = mysqli_fetch_assoc($query);

?>
	<style>
		body{
			margin: 100px;
		}
		.title_container{
			margin: 100px;
			margin-bottom: 50px;
			width: 75%;
			background-color: #681A1A;
			border-radius: 10px;
			padding: 20px 90px;
			color: white;
			
		}
		.display-6{
			font-size: 20px;
		}
		.deets_container{
			width: auto;
			height: auto;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		#deets{
			margin-right: 50vh;
			font-weight: bold;
		}
		#add_class_btn{
			background-color: #681A1A;
			font-weight: 500;
		}
		#add_class_btn:hover{
			background-color: white;
			color: #681A1A;
			border-color: #681A1A;
			font-weight: 500;
		}
		.classes_container{
			width: 75%;
			padding: 20px 0px;

		}
		.input-group{
			width: 66vh;
		}
		.class_details{
			width: 75%;
		}
		table {
			border-spacing: 0px;
			width: 75%;
			border-radius: 10px;
		}

		table td, table th {
			padding: .75em;
			vertical-align: middle;
			text-align: center;
			border-top: 1px solid #0d0d0d;
			overflow: hidden;
			border-radius: 10px;
		}
		a{
			text-decoration: none;
			color: #681A1A;
			font-weight: bold;
		}
		a:hover{
			color: #681A1A;
		}
	</style>
	<script type="text/javascript" src = "../assets/js/dialog.js" defer></script>
</head>
<body>
	<?php require '../templates/navigation.php' ?>
	<dialog id = 'dialog'>
		<form method = "POST" action = "course-registration-details.php?id=<?= $registrationId ?>">
			<div class="form-container">
				<h2> Create a Class </h2>
				<div class = "form-row mt-3">
					<label for = 'letter-order-number' class = "fw-bold" style="color: #5B5B5B">
						Letter Order Number<span class="asterisk">*</span>
					</label>
					<input style='font-size: 17px;' type="text" name="letter-order-number" id ='letter-order-number' required>
				</div>
				<div class = "form-row mt-2">
					<label for = 'general-order' class = "fw-bold" style="color: #5B5B5B" >
						General Order<span class="asterisk">*</span>
					</label>
					<input style='font-size: 17px;' type="number" name="general-order" id ='general-order' required>
				</div>
				<div class = "form-row mt-2">
					<label for = 'cert-ctrl-no' class = "fw-bold" style="color: #5B5B5B">
						Certification Control Number <span class = "asterisk">*</span>
					</label>
					<input style='font-size: 17px;' type="text" name="cert-ctrl-no" id ='cert-ctrl-no'>
				</div>
				<div class="text-center">
				  <button name="add-class" type = "submit" class="btn btn-primary mt-3" id="submit-btn" >Submit</button> 
				</div>
			</div>
		</form>

		</form>
	</dialog>


	<div class="title_container mx-auto">
		<?= "<h1>" . $row_account['course_title'] . "</h1>" ?>
		<div class="deets_container">
			<h1 class="display-6 d-inline-block" style="margin-right: 10px">Instructor </h1>
			<?= "<h1 id='deets' class='display-6 d-inline-block'>" . $row_account['firstname'] . " " . $row_account['lastname'] . "</h1>" ?>
		</div>
		<div class="deets_container ">
			<h1 class="display-6 ">Opening Date</h1>
			<?= "<h1 id='deets' class='display-6 d-inline-block'>" . $row_account['opening_date'] . "</h1>" ?>
		</div>
		<div class="deets_container">
			<h1 class="display-6">Closing Date</h1>
			<?= "<h1 id='deets' class='display-6 d-inline-block'>" . $row_account['closing_date'] . "</h1>" ?>
		</div>
		<div class="deets_container ">
			<h1 class="display-6">Registration Status</h1>
			<?php
				$opening_date = new DateTime($row_account['opening_date']);
				$closing_date = new DateTime($row_account['closing_date']);
				$current_date = new DateTime();
				$date_string = $current_date->format('Y-m-d H:i:s');

				$availability = ($current_date >= $opening_date && $current_date <= $closing_date) ? "Open" : "Closed";
				
				echo "<h1 id='deets' class='display-6 d-inline-block'>" . $availability . "</h1>";
			?>
		</div>
	</div>
	
	<?php if($classes) { ?>
	<div class="d-flex flex-column align-items-center">
		<div class="class_details mx-auto">
			<h2>Unassigned Classes</h2>

			<table class='table table-bordered table-rounded w-50'>
				<thead>
					<tr>
						<th scope='col'>CLASS NUMBER</th>
						<th scope='col'>LETTER ORDER NUMBER</th>
						<th scope='col'>GENERAL ORDER</th>
						<th scope='col'></th>        
					</tr>
				</thead>
				<tbody>
					<?php
						$class_query = "
							SELECT c.*
							FROM class_information_details c 
							LEFT 
							JOIN registration_participants_class rpc 
							ON rpc.class_info_id = c.class_info_id 
							WHERE rpc.class_info_id IS NULL";
						$query = mysqli_query($conn, $class_query);

						if (!$query) {
							echo "Error in SQL syntax: " . mysqli_error($conn);
						} else {
							// code to handle successful query
						}

						while($row_class = mysqli_fetch_assoc($query)){
							$class_number = $row_class['class_info_id'];
							$letter_order_number = $row_class["letter_order_number"];
							$general_order = $row_class["general_order"];
							echo "<tr>";
							echo "<td>$class_number</td>";
							echo "<td>$letter_order_number</td>";
							echo "<td>$general_order</td>";
							echo "<td>
									<div class='container1'>
										<div class='deleter'>
											<a class='click' href='class_information_details.php?regId=$registrationId&classId={$row_class['class_info_id']}'>VIEW</a>
										</div>
									</div>
								</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<?php } ?>
	<div class="classes_container d-flex align-items-center mx-auto">
		<form class="search_form" method="POST">
			<div class="input-group">
				<input class="form-control flex-shrink-0" type="text" name = "class_id" placeholder="Search Classes" aria-label="default input example">
				<div class="input-group-append">
					<button class="btn btn-secondary w-auto" type="button">
						<i class="fa fa-search"></i>
					</button>
				</div>
		  	</div>
		</form>
	</div>
	<div class="d-flex flex-column align-items-center">
		<div class="class_details mx-auto">
		<h2>Assigned Classes</h2>
			<table class='table table-bordered table-rounded w-50'>
				<thead>
					<tr>
						<th scope='col'>CLASS NUMBER</th>
						<th scope='col'>NO. OF PARTICIPANTS</th>
						<th scope='col'></th>        
					</tr>
				</thead>
				<tbody>
					<?php
						$class_query = "SELECT rcp.course_reg_id, cid.class_info_id, COUNT(rcp.student_reg_id) AS student_count 
										FROM registration_participants_class AS rcp 
										JOIN class_information_details AS cid ON rcp.class_info_id = cid.class_info_id 
										JOIN registration_course AS rco ON rcp.course_reg_id = rco.course_reg_id 
										WHERE rco.course_id = " . $row_account['course_id'] . " AND rco.instructor_id = " . $row_account['instructor_id'] . " 
										GROUP BY rcp.class_info_id 
										ORDER BY rcp.class_info_id ASC;";
						$query = mysqli_query($conn, $class_query);

						if (!$query) {
							echo "Error in SQL syntax: " . mysqli_error($conn);
						} else {
							// code to handle successful query
						}

						while($row_class = mysqli_fetch_assoc($query)){
							$class_number = $row_class['class_info_id'];
							$student_count = $row_class["student_count"];
							echo "<tr>";
							echo "<td>$class_number</td>";
							echo "<td>$student_count</td>";
							echo "<td>
									<div class='container1'>
										<div class='deleter'>
											<a class='click' href='class_information_details.php?regId={$registrationId}&classId={$row_class['class_info_id']}'>VIEW</a>
										</div>
									</div>
								</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
			<button class="btn btn-primary" id="add_class_btn" name="add_class_btn">Add More Classes</button>
		</div>
	</div>
	

	
</body>