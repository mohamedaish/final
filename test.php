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
<li><a href="homepage.php">Logout</a></li>
</ul>
</div>
<div class="welcome-text">
        <h1>
FLMS <span>Enrollment System</span></h1>
<br>
</h1>
    <h2><span>Usernames</span>

    <h2><span>Address<br></span>


    <?php
	$conn = mysqli_connect("localhost", "aish", "password", "login_sample_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user_name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row

while($row = $result->fetch_assoc()) {

echo "<tr><td>" . $row["user_name"] . "<br>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>


<?php
$conn = mysqli_connect("localhost", "root", "", "login_sample_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT address FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["address"];
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    </h1>
   
    
</header>

</body>
</html>
