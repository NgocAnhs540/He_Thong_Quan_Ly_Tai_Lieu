<?php
include_once '../connection.php';
$sql2="DELETE FROM user WHERE id=".$_REQUEST['data'];
$res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
mysqli_close($con);
if($res2)
{
    header("location:../index.php?msg=data successfully deleted!");
}
?> 
