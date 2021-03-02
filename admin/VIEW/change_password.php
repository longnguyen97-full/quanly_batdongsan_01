<?php
	include('session_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
    .change_password {
        padding: 5px 10px 5px 10px;
        border-radius: 0;
        outline: none;
        border: 1px solid gray;
    }
    .change_password:hover {
        background: lightgray;
    }
    .lbltb {
        color:red;
    }
</style>
</head>

<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->

<body>
	
<table width="1280" border=1 align="center" cellpadding="0" cellspacing="0">
	<tr><!-- Content -->

		<td colspan="2">
			<!-- open CONTENT --><div id="div-content" width="1080">
            <br/>
            <form method="POST" action="xuly_change_password.php">
			<table align="center" width="1230" cellpadding="10" cellspacing="2">
				<tr>
                    <td colspan="7"><h3> Đổi Mật Khẩu </h3></td>
                </tr>
				<tr>
                    <td valign="top" width="140"><strong> Tên đăng nhập : </strong></td>
                    <td> <input name="txtuser" type="text" value="" /> </td>
                </tr>
				<tr>
                    <td valign="top" width="160"><strong> Mật khẩu hiện tại : </strong></td>
                    <td> <input name="txtpw" type="password" value="" /> </td>
                </tr>
				<tr>
                    <td valign="top"><strong> Mật khẩu mới : </strong></td>
                    <td> <input name="txtpw_new" type="password" value="" /> </td>
                </tr>
				<tr>
                    <td valign="top"><strong> Nhập lại : </strong></td>
                    <td> <input name="txtpw_new" type="password" value="" /> </td>
                </tr>
				<tr>
                    <td valign="top"><a href="linhvuc.php"><input class="change_password" type="button" value="Trở Về"></a></td>
                    <td valign="top"><input class="change_password" type="submit" value="Đổi"></td>
                </tr>
                <tr>
                    <td colspan="7" valign="top">
                        <?php if(isset($_SESSION['tb_change_pw'])) { ?>
                            <label class="lbltb" name="lbltb"><?=$_SESSION['tb_change_pw']?></label>
                    </td>
                    <td valign="top">
                        <?php unset($_SESSION['tb_change_pw']); } else { ?>
                            <label class="lbltb" name="lbltb"></label>
                        <?php } ?>
                    </td>
		        </tr>
            </table>
            </form>
			</div><!-- close CONTENT -->	
		</td>
		
	</tr>
</table>

</body>
</html>