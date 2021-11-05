<?php 
    include_once '../config/connection.php';
    if(isset($_POST['submit'])){

        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['email'])));
        $password = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['pass_word'])));
        
        
        $insertqry = mysqli_query($con,"Update user set password = '$password' where email = '$email'") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:Success.php');
        }
    }
?>