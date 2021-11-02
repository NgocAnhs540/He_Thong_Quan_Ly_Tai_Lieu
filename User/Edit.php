<?php
    include_once '../connection.php';
    $id = $_REQUEST['data'];
    $qry = mysqli_query($con,"Select * from user where id='$id'") or die(mysqli_error($con));
    while($row = mysqli_fetch_array($qry)){
        $id = $row['id'];
        $fname=$row['fname'];
        $lname =$row['lname'];
        $phone = $row['phone'];
        $email = $row['email'];
        
        
    }
?>
<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<h2 style="text-align: center;">Form đăng kí người dùng </h2>
<form name="Myform" id="Myform" action="User/EditProcess.php?id='<?php echo $id;?>'" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="fname" id="fname" onkeydown="HideError()" value = "<?php echo $fname?>"/></td>
            </tr>
            <tr>
                <td>Họ</td>
                <td><input type="text" name="lname" id="lname" onkeydown="HideError()" value = "<?php echo $lname?>"/></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="mobile" id="mobile" onkeydown="HideError()" value = "<?php echo $phone?>"/></td>
            </tr>
            <tr>
                <td>Địa chỉ Email</td>
                <td><input type="text" name="email" id="email" onkeydown="HideError()" value = "<?php echo $email?>"/></td>
            </tr>
            <tr>
                <td>Kiểu người dùng</td>
                <td>
                    <select name="usertype" id="usertype" onkeydown="HideError()">
                        <option value="user" selected>Chọn kiểu người dùng</option>
                        <option value="Normal">Thông thường</option>
                        <option value="Admin" >Quản trị</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Cập nhật" /></td>
            </tr>
        
        </tbody>
    </table>
</form>

