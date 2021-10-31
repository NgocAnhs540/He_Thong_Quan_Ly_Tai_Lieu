<?php
include_once '../config/connection.php';
$sql2="DELETE FROM upload WHERE id=".$_REQUEST['data'];
$res2=mysqli_query($con,$sql2) or die(mysqli_error($con));
if($res2)
{
echo true;
}
mysqli_close($con);
?> 
