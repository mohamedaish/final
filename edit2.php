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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{

				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];

						header("Location: index.php");

						die;
					}
				}
			}
			
			echo '<script type="text/javascript"> alert("Incorrect Username or Password!") </script>';
		}else
		{
			echo '<script type="text/javascript"> alert("Incorrect Username or Password!") </script>';
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

    <div class="center">
    	<img src="https://i.postimg.cc/wv23zj61/pngtree-vector-avatar-icon-png-image-3773995.jpg" class="avatar">
      <h1>Login</h1>
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
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not an Admin? <a href="homepage.php">Go Back</a>
        </div>
      </form>
    </div>

  </body>
</html>