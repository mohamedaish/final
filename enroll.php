<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
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
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="welcome-text">
        <h1>
FLMS <span>Enrollment System</span></h1>
<br>
<h1>
	Hello, <?php echo $user_data['user_name']; ?>
	You are currently not enrolled
    </h1>
    <h1><a href="list.php">Show List of Enrollees</a></h1>
    <h1><a href="test6.php">Enroll Now</a></h1>
    </div>
</header>

</body>
</html>
