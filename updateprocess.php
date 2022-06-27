<?php 
session_start();

    include("connection.php");
    include("functions.php");

   $user_data = check_login($con);



if(isset($_POST['update_stud_data']))
{
    $id = $_POST['id'];
    $student_id = $_POST['student_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $mobile_number = $_POST['mobile_number'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $father_name = $_POST['father_name'];
    $mother_name = $_POST['mother_name'];
    $emerg_cont = $_POST['emerg_cont'];
    $course = $_POST['course'];
    $course_yr = $_POST['course_yr'];
    $birthdate = $_POST['birthdate'];

    $query = "UPDATE student SET student_id='$student_id', first_name='$first_name', last_name='$last_name', mobile_number='$mobile_number', gender='$gender', email='$email', address='$address', father_name='$father_name', mother_name='$mother_name', emerg_cont='$emerg_cont', course='$course', course_yr='$course_yr', birthdate='$birthdate' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: completelist.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: edit3.php");
    }
}

?>