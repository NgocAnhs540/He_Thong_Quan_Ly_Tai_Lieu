<!DOCTYPE html>
<html>
<head>
<title>Docs | Thành công</title>
<link rel="stylesheet" href="../css/login.css">
</head>
<body>
<div id="wrap">
<div id="header">
<div id="logo">
    <h1 style="text-align: center;"><span style="color:green">Thông Báo</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;font-color:orange;">Chờ Xác Nhận</h1>
    <h2 style="text-align: center;color:orange">Vui Lòng Chờ Xác Nhận Từ Quản Trị Viên Chính</h2>
    
</div>



<div class= "clear"></div>

<div id="footer">
@He_thong_quan_ly_tai_lieu
</div>
</div>
</body>
</html>
<?php
    $loc = "../index.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>