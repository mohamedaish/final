<?php 

session_start();

	include("connection.php");
	include("functions.php");




	

?>



<!DOCTYPE html>
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
		<h1><a href="index.php">Home</a>
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="8"><h2>List</h2></th> 

		</tr> 
			  <th>Name</th> 
			  <th>Name</th> 
			  <th>Name</th> 
			  <th>Name</th> 
			  <th>Name</th> 
			  <th>Name</th> 
			  <th>Name</th> 
			  <th>Name</th> 
			
			  
		</tr> 
		
		
		<tr> <td>
			<?php
$conn = mysqli_connect("localhost", "root", "", "login_sample_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user_name FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["user_name"];
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

		</tr> 

	</table> 
	</body> 
	</html>