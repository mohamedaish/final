<?php 
session_start();

  include("connection.php");
  include("functions.php");



  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
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
    
    

    if(!empty($mobile_number) && is_numeric($mobile_number))
    {

      //save to database
      
      $query = "insert into student (student_id,first_name,last_name,mobile_number,gender,email,address,father_name,mother_name,emerg_cont,course,course_yr,birthdate) values ('$student_id','$first_name','$last_name','$mobile_number','$gender','$email','$address','$father_name','$mother_name','$emerg_cont','$course','$course_yr','$birthdate')";

      mysqli_query($con, $query);

      header("Location: index.php");

      die;
    }else
    {
      echo "Please enter some valid information!";
    }
  }
?>









<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <title>sample</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css"> 
  </head>
  <body>
    <header>
      <div class="wrapper">
        <div class="logo">
            <img src="https://i.postimg.cc/J4YW3W2b/Screenshot-1.png" alt="">
        </div>
      
      <ul class="nav-area">
<li><a href="homepage.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>

    <div class="centertest">
       
      <img src="https://i.postimg.cc/wv23zj61/pngtree-vector-avatar-icon-png-image-3773995.jpg" class="avatar">
      <h1>Input Your Information</h1>

      <form method="post">
        <div class="txt_field">
          <input id="text" type="text" name="student_id">
          <span></span>
          <label>Student ID</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="first_name">
          <span></span>
          <label>First Name</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="last_name">
          <span></span>
          <label>Last Name</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="mobile_number">
          <span></span>
          <label>Phone Number</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="gender">
          <span></span>
          <label>Gender</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="email">
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="address">
          <span></span>
          <label>Address</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="father_name">
          <span></span>
          <label>Father's Name</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="mother_name">
          <span></span>
          <label>Mother's Name</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="emerg_cont">
          <span></span>
          <label>Emergency Contact</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="course">
          <span></span>
          <label>Course</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="course_yr">
          <span></span>
          <label>Year Level</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="birthdate">
          <span></span>
          <label>Birth Date</label>
        </div>
         
        <input type="submit" value="Enroll Now">
        <div class="signup_link">
          Already Enrolled? <a href="test9.php">Enrollees List</a>
          <br>Or<br>
          <a href="index.php">Go Back</a>
        </div>
      </form>
    </div>

  </body>
</html>
