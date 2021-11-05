<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$con= mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"doc_db");
}
 else {
     echo "could not connect to the database".die(mysqli_error($con));
}
?>
