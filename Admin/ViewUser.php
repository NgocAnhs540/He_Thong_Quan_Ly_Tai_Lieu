
<?php
include_once '../config/connection.php';
$sql="SELECT * FROM user";
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
<th>Địa chỉ email</th>
<th>Kiểu người dùng</th>
<th colspan=2>Hành động</th>
</tr>
<?php
$i = 1;
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
echo "</td><td>";
echo $row['type'];
echo "
<td><a href=\"Admin/delete.php?data=".$row['id_user']."\">delete</a></td>
<td><a href=\"#\" onclick=\"getPage('Admin/Edit.php?data=".$row['id_user']."')\">edit</a></td></tr>";
$i++;
}
mysqli_close($con);
?>
</table>
