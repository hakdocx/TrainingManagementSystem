<?php 

	require '../templates/connection.php';

	if(isset($_POST['add-student'])) {
		$classId = $_POST['classId'];
		$regId = $_POST['regId'];
		$studentId = $_POST['studentId'];

		echo $classId . " - " . $regId . " - " . $studentId; 

		$sql = "
			SELECT * 
			FROM registration_participants_class rpc
			WHERE rpc.student_id = $studentId
			AND rpc.class_info_id = $classId
			AND rpc.course_reg_id = $regId
		";
		$query = mysqli_query($conn, $sql);
		$result = mysqli_fetch_assoc($query);

		if(!$result) {
			$sql = "
				INSERT INTO registration_participants_class (class_info_id, course_reg_id, student_id) 
				VALUES ('$classId', '$regId', '$studentId')
				";
			$query = mysqli_query($conn, $sql);	
		
		}

		$param = array(
			'regId' => $regId,
			'classId' => $classId
		);
		$para = http_build_query($param);
		header("location: class_information_details.php?$para");
	}

 ?>