<form name="Myform" id="Myform" action="forgetProcess.php" method="post" onsubmit="return(Validate());">
    <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left:2em;">
        <thead></thead>
        <tbody>
            <tr>
                <td style="text-align: right;font-size: 20px">Email</td>
                <td style="font-size: 20px"><input type="text" name="fname" id="fname" onkeydown="HideError()" size="20px;" /></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Số điện thoại</td>
                <td style="font-size: 20px"><input type="text" name="mobile" id="mobile" onkeydown="HideError()" size="20px;" /></td>
            </tr>
            <tr>
                <td style="text-align: right;font-size: 20px">Mật khẩu mới </td>
                <td style="font-size: 20px"><input type="password" name="password" id="password" maxlength="8" onkeydown="HideError()" size="20px;" /></td>
            </tr>

            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Thay đổi mật khẩu" /></td>
            </tr>
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td style="color:green;"><a href="login.php"><i>
                            << Quay lại</i></a></td>
            </tr>

        </tbody>
    </table>
</form>