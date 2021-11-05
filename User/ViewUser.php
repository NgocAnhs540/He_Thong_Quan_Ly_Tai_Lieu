
<?php
    @session_start();
    include_once '../config/connection.php';
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $sql="SELECT * FROM user where email = '$email' AND password = '$password'";
    $res=mysqli_query($con,$sql) or die(mysqli_error($con));
?>
<html>
    <head>
    <style type="text/css">
    #viewdata table{
        border:1px solid #aaa;
    }
    #viewdata th{background:#aaa;}
    #viewdata td{background:#efefef;}
    #viewdata th,td{padding:5px;text-align:left;}
    </style>
    <table id="viewdata">
        <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Họ</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ Email</th>
        <th>Hành động</th>
        </tr>
        <?php 
        $i=1;
        while($row=mysqli_fetch_assoc($res))
        {

            echo "<tr><td>";
            echo $i;
            echo "</td><td>";
            echo $row['fname'];
            echo "</td><td>";
            echo $row['lname'];
            echo "</td><td>";
            echo $row['phone'];
            echo "</td><td>";
            echo $row['email'];
            echo "

            <td><a href=\"#\" onclick=\"getPage('Edit.php?data=".$row['id_user']."')\">Edit</a></td></tr>";
            $i++;
        }
        mysqli_close($con);
        ?>
</table>
