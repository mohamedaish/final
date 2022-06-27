<?php 
session_start();

  include("connection.php");
  include("functions.php");

$user_data = check_login($con);

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $student_idd = $_POST['student_idd'];
    $mobnum = $_POST['mobnum'];
    

    if(!empty($mobnum) && is_numeric($mobnum))
    {

      //save to database
      
      $query = "insert into sample (student_idd,mobnum) values ('$student_idd','$mobnum')";

      mysqli_query($con, $query);

      header("Location: login.php");
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
      <h1>Signup</h1>

      <form method="post">
        <div class="txt_field">
          <input id="text" type="text" name="student_idd">
          <span></span>
          <label>studentid</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="mobnum">
          <span></span>
          <label>mobile number</label>
        </div>
         
        <input type="submit" value="Signup">
        <div class="signup_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
