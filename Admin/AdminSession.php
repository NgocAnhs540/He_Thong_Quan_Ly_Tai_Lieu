<?php
    session_start();
    if($_SESSION['type']!='Admin')
    {
        header('location:Login/login.php');
        exit();
    }
    include 'config/connection.php'
?>
