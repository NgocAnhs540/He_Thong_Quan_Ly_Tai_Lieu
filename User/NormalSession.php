<?php
    session_start();
    if($_SESSION['type']!='user')
    {
        header('location:../Login/login.php');
        exit();
    }
    include '../config/connection.php'
?>
