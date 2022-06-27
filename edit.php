<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE student set test_id='" . $_POST['test_id'] . "', student_id='" . $_POST['student_id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', mobile_number='" . $_POST['mobile_number'] . "' ,gender='" . $_POST['gender'] . "', email='" . $_POST['email'] . "', address='" . $_POST['address'] . "', father_name='" . $_POST['father_name'] . "', mother_name='" . $_POST['mother_name'] . "', emerg_cont='" . $_POST['emerg_cont'] . "', course='" . $_POST['course'] . "', course_yr='" . $_POST['course_yr'] . "', birthdate='" . $_POST['birthdate'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM student WHERE test_id='" . $_GET['test_id'] . "'");
$row= mysqli_fetch_array($result);
?>
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="style4.css">  
    <div><?php if(isset($message)) { echo $message; } ?>
</div>
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

<table class="content-table">

		 <thead>
    <tr><th colspan="14" style="font-size: 2em; border-bottom:1px solid white;">Enrollees</th></tr>
    <tr>
			  <th>Student ID</th> 
			  <th>Name</th> 
			  <th>Mobile Number</th> 
			  <th>Gender</th> 
			  <th>Email</th> 
			  <th>Address</th> 
			  <th>Father's Name</th>
			  <th>Mother's Name</th> 
			  <th>Emergency Contact</th> 
			  <th>Course</th> 
			  <th>Year Level</th> 
			  <th>Birthdate</th> 
			  <th></th>
			  <th></th>
			
			  </tr>
			</thead>
		<tbody>

		
		<tr>
		
			<form method="post">
Student ID: <br>
<input type="hidden" name="test_id" class="txtField" value="<?php echo $row['test_id']; ?>">
<input type="text" name="student_id"  value="<?php echo $row['student_id']; ?>">
First Name: <br>
<input type="hidden" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
<br>
Last Name: <br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
<br>
Mobile Number :<br>
<input type="text" name="mobile_number" class="txtField" value="<?php echo $row['mobile_number']; ?>">
<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
<br>
Address: <br>
<input type="hidden" name="address" class="txtField" value="<?php echo $row['addcslashes(str, charlist)']; ?>">
<br>
Father's Name: <br>
<input type="text" name="father_name" class="txtField" value="<?php echo $row['father_name']; ?>">
<br>
Mother's Name :<br>
<input type="text" name="mother_name" class="txtField" value="<?php echo $row['mother_name']; ?>">
<br>
Emergency Contact:<br>
<input type="text" name="emerg_cont" class="txtField" value="<?php echo $row['emerg_cont']; ?>">
<br>
Course:<br>
<input type="text" name="course" class="txtField" value="<?php echo $row['course']; ?>">
<br>
Year Level: <br>
<input type="hidden" name="course_yr" class="txtField" value="<?php echo $row['course_yr']; ?>">
<br>
Birthdate: <br>
<input type="text" name="birthdate" class="txtField" value="<?php echo $row['birthdate']; ?>">
<br>
<input type="submit" value="Submit">
<br>
		

</tbody>
<div class="back-text">
	<h1><a href="index.php">Back</a></h1>
</div>
</header>

</body>
</html>
