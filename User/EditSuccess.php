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
    <h1 style="text-align: center;">DFS | <span style="color:green">Thông báo</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="text-align:center; margin-left: 5em;">CHÚC MỪNG</h1>
    <h2 style="text-align: centrt; color: green">Bạn Đã Chỉnh Sửa Thông Tin Thành Công </h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
@Nhóm 10
</div>
</div>
</body>
</html>
<?php
    $loc = "index.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>