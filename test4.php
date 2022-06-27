<?php 
session_start();

  include("connection.php");
  include("functions.php");

$user_data = check_login($con);

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $student_id = $_POST['student_id'];
    $mobnum = $_POST['mobnum'];
    $name = $_POST['name'];
    $last = $_POST['last'];
    $addresss = $_POST['addresss'];
    $email = $_POST['email'];
    $kurso = $_POST['kurso'];
    $bday = $_POST['bday'];
    $dad = $_POST['dad'];
    $mom = $_POST['mom'];
    $emergkontak = $_POST['emergkontak'];
    $ginger = $_POST['ginger'];
    $year = $_POST['year'];
  
  
    
    if(!empty($mobnum) && is_numeric($mobnum))
    {

      //save to database
      
      $query = "insert into sample (student_id,mobnum,name,last,addresss,email,kurso,bday,dad,mom,emergkontak,ginger,year) values ('$mobnum','$student_id','$name','$last','$addresss','$email','$kurso','$bday','$dad','$mom','$emergkontak','$ginger','$year')";

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
          <input id="text" type="text" name="mobnum">
          <span></span>
          <label>mb</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="student_id">
          <span></span>
          <label>sidd</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="name">
          <span></span>
          <label>name</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="last">
          <span></span>
          <label>last</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="addresss">
          <span></span>
          <label>address</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="email">
          <span></span>
          <label>email</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="kurso">
          <span></span>
          <label>kurso</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="bday">
          <span></span>
          <label>bday</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="dad">
          <span></span>
          <label>ngalan sa amahan</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="mom">
          <span></span>
          <label>mom</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="emergkontak">
          <span></span>
          <label>emergkontak</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="ginger">
          <span></span>
          <label>gender</label>
        </div>
        <div class="txt_field">
          <input id="text" type="text" name="year">
          <span></span>
          <label>tuig</label>
        </div>
        
         
        <input type="submit" value="Signup">
        <div class="signup_link">
          Already a member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

  </body>
</html>
