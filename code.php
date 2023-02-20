<?php
session_start();
require 'templates/connection.php';


if(isset($_POST['save_student']))
{
    $course_title = mysqli_real_escape_string($conn, $_POST['course_title']);
    $number_of_days = mysqli_real_escape_string($conn, $_POST['number_of_days']);
    $mtap_course = mysqli_real_escape_string($conn, $_POST['mtap_course']);
    $implementation = mysqli_real_escape_string($conn, $_POST['implementation']);

    $query = "INSERT INTO course (course_title,number_of_days,mtap_course,implementation) VALUES ('$course_title','$number_of_days','$mtap_course','$implementation')";

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



if(isset($_POST['update_course']))
{
    $course_title = mysqli_real_escape_string($conn, $_POST['course_title']);
    $number_of_days = mysqli_real_escape_string($conn, $_POST['number_of_days']);
    $mtap_course = mysqli_real_escape_string($conn, $_POST['mtap_course']);
    $implementation = mysqli_real_escape_string($conn, $_POST['implementation']);

    $query = "UPDATE course SET course_title='$course_title', number_of_days='$number_of_days', mtap_course='$mtap_course', implementation='$implementation' WHERE course_id='$course_title' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}

?>