<?php 

	require '../templates/connection.php';

	if(isset($_POST['add-student'])) {
		$classId = $_POST['classId'];
		$regId = $_POST['regId'];
		$studentId = $_POST['studentId'];

		echo $classId . " - " . $regId . " - " . $studentId; 

		$sql = "
			INSERT INTO registration_participants_class (class_info_id, course_reg_id, student_id) 
			VALUES ('$classId', '$regId', '$studentId')
		";
		$query = mysqli_query($conn, $sql);

		if($query) {
			$param = array(
				'regId' => $regId,
				'classId' => $classId
			);
			$para = http_build_query($param);
			header("location: class_information_details.php?$para");
		} else {
			echo "Something else";
		}
	}

 ?>