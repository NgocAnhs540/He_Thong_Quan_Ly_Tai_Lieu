<?php 
session_start();
 ?>
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
    <h1 style="text-align: center;"><span style="color:green">Thông báo</span></h1>  
</div>
</div>

<div id="content">
    
    <h1 style="margin-left: 5em;"> Thành công</h1>
    <h2 style="color: green">Bạn đã tải lên thành công tệp của mình </h2>
    
</div>

<div class= "clear"></div>

<div id="footer">
&copy;He_thong_quan_ly_tai_lieu
</div>
</div>
</body>
</html>
<?php
$path = ($_SESSION['type'] == 'Admin') ? "../" : "../user/";
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>