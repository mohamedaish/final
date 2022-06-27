<?php 
session_start();

  include("connection.php");
  include("functions.php");



  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
      //save to database
      $user_id = random_num(20);
      $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
      

      mysqli_query($con, $query);
       echo '<script type="text/javascript"> alert("Success") </script>';
      if($query)
 
      {
    
      header("Location: index.php");
    }
      die;
    }else
    {
      echo '<script type="text/javascript"> alert("Please Enter Valid Information") </script>';
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
<li><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>

    <div class="center">

      <img src="https://i.postimg.cc/wv23zj61/pngtree-vector-avatar-icon-png-image-3773995.jpg" class="avatar">
      <h1>Add New Admin</h1>
      <form method="post">
        <div class="txt_field">
          <input id="text" type="text" name="user_name">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input id="text" type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"></div>
        <input type="submit" value="Signup">
        <div class="signup_link">
          Already an Admin? <a href="login.php">Login</a>
        <br>Or<br>
        <a href="index.php">Go Back</a>


        </div>
      </form>
    </div>

  </body>
</html>
