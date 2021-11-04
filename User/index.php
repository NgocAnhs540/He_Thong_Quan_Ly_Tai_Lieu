<?php
    include_once 'NormalSession.php';
    
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
        <title>Trang chủ | Hệ Thống Quản Lý Tài liệu</title>
        <link rel="stylesheet" href="../css/index.css">
        <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="../js/Registration.js"></script>
        <script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }
        </script>
    </head>
    <body>
        <div id="wrap-fluid">
            <div id="header">
                <div id="logo">
                    <h1 style="text-align: center;padding-top:0px; font-size: 35px; color: green"><img src="../image/Address Book.png" style="margin-bottom: -10px;" alt="logo"/>HỆ THỐNG QUẢN LÝ TÀI LIỆU</h1>  
                </div>


                </div>
            <div id="menu">
              
                <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="#" onclick="getPage('ViewUser.php')">Hồ sơ cá nhân</a></li>
                <li><a href="#">Quản lý tài liệu</a>
                <ul>
                <li><a href="#" onclick="getPage('../Upload/Upload.php')">Thêm một tài liệu mới</a></li>
                <li><a href="#" onclick="getPage('../View/View.php')">Xem tất cả tài liệu</a></li>
                <!--<li><a href="#">Edit file</a></li>-->
                </ul>
                </li> 
                <li><a href="../logout.php">Đăng xuất</a></li>
                <li style="margin-left:60em;padding-top:10px;">Tài khoản: <?php echo $username?></li>
                </ul>
<<<<<<< HEAD
                <div id="side">
            <h3 style="margin: 25px;border:5px;">Bảng Điều Khiển</h3>
            <table style="border: 2px red;background-color: green;">
=======
            </div>
            <div id="main">
            <div id="content">
            <h1>Chào mừng bạn đến với hệ thống quản lý tài liệu  </h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Upload tài liệu lên hệ thống</li>
                <li>Download tài liệu</li>
                <li>Chỉnh sửa tài liệu cá nhân của bạn</li>
                <li>Chỉnh sửa thông tin người dùng</li>
            </ul>
            </div>
            <div id="side">
            <h3>Bảng Điều Khiển</h3>
            <table style="border: 1px black solid;background-color: #607B8B;">
>>>>>>> 1bba2d42102fa95e08347ad7add420465838712b
                <tr>
                    <td><li><a href="#" onclick="getPage('../Upload/Upload.php')">Thêm tài liệu mới</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('../View/View.php')">Xem tài liệu</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('ViewUser.php')">Hồ sơ của tôi</a></li></td>
                </tr>
<!--                <tr>
                    <td><li><a href="#" onclick="getPage('Edit.php')">Chỉnh Sửa Hồ Sơ</a></li></td>
                </tr>-->
                

            </table>
            </div>
            </div>
            <div id="main">
            <div id="content">
            <h1>Chào mừng bạn đến với hệ thống quản lý tài liệu  </h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Upload tài liệu lên hệ thống</li>
                <li>Download tài liệu</li>
                <li>Chỉnh sửa tài liệu cá nhân của bạn</li>
                <li>Đăng kí người dùng mới</li>
                <li>Chỉnh sửa thông tin người dùng</li>
            </ul>
            </div>
           
            <!-- this clear class is for special purpose.
            this is for to clear the "float property" of 
            the previous element, it will prevent footer
            to float -->
            <div class= "clear"></div>
            </div>
            <div id="footer">
            @Nhóm 10           </div>
        </div>
    </body>
</html>
