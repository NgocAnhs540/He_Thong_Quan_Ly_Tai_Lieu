
<script type="text/javascript" src="../js/Registration.js"></script>
<script type="text/javascript">

</script>
<h2 style="text-align: center;">Đăng Ký Người Dùng </h2>
<form name="Myform" id="Myform" action="../User/process-register.php" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px;">
        <thead></thead>
        <?php
                    if(isset($_GET['response'])){
                      if($_GET['response'] == 'successfully'){
                        echo "<p class='text-danger'>Bạn Đã Đăng Kí Thành Công</p>";
                        
                      }

                      if($_GET['response'] == 'existed'){
                        echo "<p class='text-danger'>Email đã tồn tại</p>";
                      }
                    }

                ?>
        <tbody>
            <tr>
                <td>Tên</td>
                <td><input type="text" name="fname" id="fname" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Họ</td>
                <td><input type="text" name="lname" id="lname" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="mobile" id="mobile" maxlength="10" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Địa chỉ Email</td>
                <td><input type="text" name="email" id="email" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="pass1" id="pass1" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu</td>
                <td><input type="password" name="pass2" id="pass2" onkeydown="HideError()"/></td>
            </tr>
            <tr>
                <td>Kiểu người dùng</td>
                <td>
                    <select name="usertype" id="usertype" onkeydown="HideError()">
                     
                        <option value="user">Bình thường</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit-reg" value="Thêm" /></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td style="color:green;"><a href="login.php"><i>
                            << Quay lại</i></a></td>
            </tr>
        
        </tbody>
    </table>
</form>

