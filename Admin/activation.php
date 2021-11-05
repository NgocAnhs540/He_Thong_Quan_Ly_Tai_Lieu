   
<?php
include('../config/connection.php');
if (isset($_GET['accout'])) {
    $email = $_GET['accout'];
    $code = $_GET['activation'];
    $sql = "SELECT * from user where email = '$email' and activation = '$code'";
    $res = mysqli_query($con, $sql);
    $user = mysqli_num_rows($res);
    if ($user > 0) {
        $sql = "UPDATE user set status = 1 where email = '$email' and activation = '$code'";
        $res = mysqli_query($con, $sql);
        header("Location:../Login/login.php?status=1");
    } else {
        header("Location:../Login/login.php?status=0");
    }
} else {
    echo 'Lỗi';
}