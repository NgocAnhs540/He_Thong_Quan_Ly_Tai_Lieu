<?php
date_default_timezone_set("Africa/Nairobi");
$con= mysqli_connect("localhost","root","");
if($con)
{
    mysqli_select_db($con,"doc_db");
}
 else {
     echo "Không thể kết nối tới cơ sở dữ liệu".die(mysqli_error($con));
}
?>
