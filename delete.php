<?php 
session_start();

    include("connection.php");
    include("functions.php");

   $user_data = check_login($con);




if(isset($_POST['delete_form_data']))
{

    $id = $_POST['id'];
    

    $query = "DELETE FROM student WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        
        header("Location: completelist.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: completelist.php");
    }
}

?>