<?php 
session_start();

    include("connection.php");
    include("functions.php");

   



if(isset($_POST['update_stud_data']))
{
    $id = $_POST['id'];
    $user_name = $_POST['user_name'];


    $query = "UPDATE users SET user_name='$user_name' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: edit4.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: edit4.php");
    }
}

?>