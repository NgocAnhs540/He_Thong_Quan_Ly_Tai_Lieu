<?php
    include('config/connection.php');
    include( 'Admin/AdminSession.php');
    $uname = $_SESSION['email'];
    $password = $_SESSION['password'];
    $chekUser = mysqli_query($con,"Select * from user where email= '$uname' AND password = '$password'") or die(mysqli_error($con));
    $row = mysqli_fetch_array($chekUser);
    $fname = $row['fname'];
    $lname = $row['lname'];
    
    $username = $fname . " ".$lname;
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Trang chủ | Hệ hống quản lý tài liệu</title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="shortcut icon" href="image/Address Book.png" >
        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="js/Registration.js"></script>
        <script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }
        </script>
    </head>
    <?php
    include('config/connection.php');
    if (isset($_GET['status']))  $noti = $_GET['status'] == 0 ? "Bạn đã thêm thành công, vui lòng kiểm tra email để kích hoạt tài khoản" : "Người dùng đã chấp nhận lời mời";
    ?>
    <body>
        <div id="wrap-fluid">
            <div id="header">
                <div id="logo">
                    <h1 style="text-align: center;padding-top:0px; font-size: 35px; color: green"> <img src="image/Address Book.png" style="margin-bottom: -10px;" alt="logo" id="logo"/>HỆ THỐNG QUẢN LÝ TÀI LIỆU</h1>  
                </div>
                </div>
            <div id="menu">
                <ul>
                <li><a href="index.php">Trang Chủ</a>
                <li><a href="#" onclick="getPage('Admin/Registation.php')">Thêm Quản Trị Viên</a></li>
                <li><a href="#">Quản Lý Tài Liệu</a>
                <ul>
                <li><a href="#" onclick="getPage('Upload/Upload.php')">Thêm Tài Liệu Mới</a></li>
                <li><a href="#" onclick="getPage('View/View.php')">Xem Tất Cả Tài Liệu</a></li>

                </ul>
                </li> 
                <li><a href="logout.php">Đăng Xuất</a></li>
                
                <li style="margin-top:5px;margin-left:45em;">Chào mừng: <?php echo $username?></li>
                
                </ul>
            </div>
            <div id="main">
            <div id="content">
            <h1>Chào Mừng Đến Với Hệ Thống Quản Lý Tài Liệu </h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Upload Tài Liệu Lên Hệ Thống</li>
                <li>Download Tài Liệu</li>
                <li>Chỉnh Sửa Tài Liệu Cá Nhân</li>
                <li>Đăng Kí Người Dùng Mới</li>
                <li>Chỉnh Sửa Thông Tin Người Dùng</li>
            </ul>
            </div>
            <div id="side">
            <h3 style="margin: 25px;border:5px;background-color:yellow;">Bảng Điều Khiển</h3>
            <table style="border: 2px red;background-color: yellow;">
                <tr>
                    <td><li><a href="#" onclick="getPage('Upload/Upload.php')">Thêm Tài Liệu Mới</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('View/View.php')">Xem Tài Liệu</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('Admin/Registation.php')">Thêm Quản Trị Viên</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('Admin/ViewUser.php')">Hiển Thị Tài Khoản</a></li></td>
                </tr>

            </table>
            </div>

            <div class= "clear"></div>
            </div>
            <div id="footer">
            @Nhóm 10
            </div>
        </div>
    </body>
</html>
