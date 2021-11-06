<form name="Myform" id="Myform" action="forgetProcess.php" method="post" onsubmit="return(Validate());">
    <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 18px"><i class="fas fa-user-circle"></i>Email</td>
                <td style="font-size: 18px"><input type="text" name="email" id="email" onkeydown="HideError()" size="20px;" /></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 18px"><i class="fas fa-key"></i>Mật khẩu mới </td>
                <td style="font-size: 18px"><input type="password" name="pass_word" id="pass_word" maxlength="8" onkeydown="HideError()" size="20px;" /></td>
            </tr>

            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Thay đổi mật khẩu" /></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td style="color:green;"><a href="login.php">
                <i class="fas fa-arrow-circle-left"></i>Trở Lại</a></td>
            </tr>

        </tbody>
    </table>
</form>