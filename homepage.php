<?php 

session_start();

	include("connection.php");
	include("functions.php");



	

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <style> 
    * {
  box-sizing: border-box;
}
.box{
    width: 400px;
    height: 400px;
    padding: 20px;
    position: absolute;
    left: -500px;
    top: -230px;
    margin: 100px auto;
    box-shadow: 0px 0px 10px 2px grey;
    border: 10px;
    background-image: url(https://i.postimg.cc/C18sCM8q/Screenshot-3.png);
    background-size: cover; 
    text-align: left;
}
.box2{
    width: 400px;
    height: 400px;
    padding: 20px;
    position: absolute;
    left: 700px;
    top: -230px;
    margin: 100px auto;
    box-shadow: 0px 0px 10px 2px grey;
    border: 10px;
    background-image: url(https://i.postimg.cc/C18sCM8q/Screenshot-3.png);
    background-size: cover; 
    text-align: left;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>   
</head>
<body>
    <header>
    <div class="wrapper">
        <div class="logo">
            <img src="https://i.postimg.cc/J4YW3W2b/Screenshot-1.png" alt="" >
        </div>

<ul class="nav-area">

<li><a href="homepage.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>

<div class="welcome-text">
        <h1>
FLMS <span>Enrollment System</span></h1>
<!-- <div class="box">
</div>
<div class="box2">
</div> -->

<!-- <div class="row">  -->
  <!-- <div class="column"> -->
    
 <!--  </div>
  <div class="column">
    <img src="https://i.postimg.cc/C18sCM8q/Screenshot-3.png" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://i.postimg.cc/C18sCM8q/Screenshot-3.png" alt="Mountains" style="width:100%">
  </div>
</div>
    -->
<a href="login.php">Login</a>
<a href="test6.php">Enroll Now</a><br>
<a href="test9.php">Show List of Enrollees</a>
    </div>

</header>

</body>
</html>
