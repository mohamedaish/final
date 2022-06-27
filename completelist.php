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
    <link rel="stylesheet" href="style4.css">  
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
    <tr><th colspan="15" style="font-size: 4em; border-bottom:1px solid white;">Enrollees</th></tr>
    <tr>
			  <th>Database ID</th> 
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
			  <th colspan="2">Edit/Delete</th>
			  
			
			  </tr>
			</thead>
		<tbody>

		<form>
		<tr>
		
			<?php
$conn = mysqli_connect("localhost", "aish", "password", "login_sample_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, student_id, first_name, last_name, mobile_number, gender, email, address, father_name, mother_name, emerg_cont, course, course_yr, birthdate FROM student";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"] . "</td><td>". $row["student_id"] . "</td><td>". $row["first_name"] . " " . $row["last_name"] . "</td><td>". $row["mobile_number"] . "</td><td>". $row["gender"] . "</td><td>". $row["email"] . "</td><td>". $row["address"] . "</td><td>". $row["father_name"] . "</td><td>" . $row["mother_name"] . "</td><td>" . $row["emerg_cont"] . "</td><td>" . $row["course"] . "</td><td>" . $row["course_yr"] . "</td><td>" . $row["birthdate"] . "</td><td>" . '<a href="edit3.php">Edit</a>' . "</td><td>" . '<a href="deleteform.php">Delete</a>' . "</td><tr>";
}
echo "</table>";
} else { echo "0";}
$conn->close();
?>

		

</tbody>
<div class="back-text">
	<h1><a href="index.php">Back</a></h1>
</div>
</header>

</body>
</html>
