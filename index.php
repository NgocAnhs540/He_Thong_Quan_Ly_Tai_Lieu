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
        <title>Trang chủ | Hệ thống quản lý tài liệu</title>
        <link rel="stylesheet" href="css/index.css">
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
                    <h1 style="text-align: center;color: green"><span><img src="image/Address Book.png" alt="logo" /></span>Hệ thống quản lý tài liệu</h1>  
                </div>
                </div>
            <div id="menu">
                <ul>
                <li><a href="#" onclick="getPage('Admin/Registration.php')">Đăng ký</a></li>
                <li><a href="#">Quản lý tài liệu</a>
                <ul>
                <li><a href="#" onclick="getPage('Upload/Upload.php')">Thêm một tài liệu mới</a></li>
                <li><a href="#" onclick="getPage('View/View.php')">Xem tất cả tài liệu</a></li>

                </ul>
                </li> 
                <li><a href="logout.php">Đăng xuất</a></li>
                
                <li style="margin-top: 5px;margin-left:60em;">Chào mừng: <?php echo $username?></li>
                
                </ul>
            </div>
            <div id="main">
            <div id="content">
            <h1>Chào mừng bạn đến với hệ thống quản lý tài liệu </h1>
            <ul style="margin-left: 5em; margin-top: 2em;">
                <li>Upload tài liệu lên hệ thống</li>
                <li>Download tài liệu</li>
                <li>Chỉnh sửa tài liệu cá nhân của bạn</li>
                <li>Đăng kí người dùng mới</li>
                <li>Chỉnh sửa thông tin người dùng</li>
            </ul>
            </div>
            <div id="side">
            <h3>Bảng điều khiển</h3>
            <table style="border: 1px black solid;background-color: #607B8B;">
                <tr>
                    <td><li><a href="#" onclick="getPage('Upload/Upload.php')">Thêm tài liệu mới</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('View/View.php')">Xem tài liệu</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('Admin/Registation.php')">Thêm người dùng</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#" onclick="getPage('Admin/ViewUser.php')">Hiển thị người dùng</a></li></td>
                </tr>

            </table>
            </div>

            <div class= "clear"></div>
            </div>
            <div id="footer">
            @He_thong_quan_ly_tai_lieu
            </div>
        </div>
    </body>
</html>
