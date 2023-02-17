<?php
session_start();
require 'templates/connection.php';


if(isset($_POST['save_student']))
{
    $course_title = mysqli_real_escape_string($conn, $_POST['course_title']);
    $number_of_days = mysqli_real_escape_string($conn, $_POST['number_of_days']);
    $mtap_course = mysqli_real_escape_string($conn, $_POST['mtap_course']);
    $pre_requisite_course = mysqli_real_escape_string($conn, $_POST['pre_requisite_course']);
    $implementation = mysqli_real_escape_string($conn, $_POST['implementation']);

    $query = "INSERT INTO course (course_title,number_of_days,mtap_course,pre_requisite_course,implementation) VALUES ('$course_title','$number_of_days','$mtap_course','$pre_requisite_course','$implementation')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: index.php");
        exit(0);
    }
}

?>