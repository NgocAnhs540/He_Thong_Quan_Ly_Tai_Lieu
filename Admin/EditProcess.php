<?php 
    
    include_once '../config/connection.php';
    if(isset($_POST['submit'])){
        $fname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['fname'])));
        $lname = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['lname'])));
        $phone = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['mobile'])));
        $email = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['email'])));
        $password = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['password'])));
        $Usertype = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['usertype'])));
        
        $id = $_REQUEST['id'];
        
        $insertqry = mysqli_query($con,"Update user set fname = '$fname',lname = '$lname', phone = '$phone',email = '$email', password='$password', type='$Usertype' where id = $id") or die(mysqli_error($con));
        if($insertqry)
        {
            header('location:../index.php');
        }
    }
?>
