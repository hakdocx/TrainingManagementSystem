<?php
session_start();
require '../templates/connection.php';


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
        $_SESSION['message'] = "Course Created!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Created!";
        header("Location: index.php");
        exit(0);
    }
}



if(isset($_POST['update_course']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $course_title = mysqli_real_escape_string($conn, $_POST['course_title']);
    $number_of_days = mysqli_real_escape_string($conn, $_POST['number_of_days']);
    $mtap_course = mysqli_real_escape_string($conn, $_POST['mtap_course']);
    $implementation = mysqli_real_escape_string($conn, $_POST['implementation']);

    $query = "UPDATE course SET course_title='$course_title', number_of_days='$number_of_days', mtap_course='$mtap_course', implementation='$implementation' WHERE course_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Course Updated!";
        header("Location: viewRecord.php?id=$id");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Updated!";
        header("Location: viewRecord.php?id=$id");
        exit(0);
    }

}


if(isset($_POST['delete_course']))
{
    $id = mysqli_real_escape_string($conn, $_POST['c_id']);

    $query = "DELETE FROM course WHERE course_id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Course Deleted!";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Course Not Deleted!";
        header("Location: index.php");
        exit(0);
    }
}

?>