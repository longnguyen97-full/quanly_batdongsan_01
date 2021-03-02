<?php 
	session_start();

	//phat thong bao phan hoi tu trang quanly va dong thoi huy thong bao 
	function phpAlert_qly($msg) {
		echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
	}
	function phpAlert_dxuat($msg) {
		echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
	}
	function phpAlert_dky($msg) {
		echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
	}
	function phpAlert_change_pw($msg) {
		echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
	}
	if(isset($_SESSION['tb_qly'])) {
		phpAlert_qly(" Đăng nhập để tiếp tục ");
		unset($_SESSION['tb_qly']);
	}
	error_reporting();
	if(isset($_SESSION['tb_dxuat'])) {
		phpAlert_dxuat(" Bạn đã đăng xuất thành công ");
		unset($_SESSION['tb_dxuat']);
	}
	error_reporting();
	if(isset($_SESSION['tb_dky'])) {
		phpAlert_dky(" Bạn đã đăng ký thành công ");
		unset($_SESSION['tb_dky']);
	}
	error_reporting();
	if(isset($_SESSION['tb_change_pw'])) {
		phpAlert_dky(" Mật khẩu của bạn đã thay đổi ");
		unset($_SESSION['tb_change_pw']);
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Công Ty TNHH Bất Động Sản</title>
</head>

<style>
	#main-table{
		background: linear-gradient(120deg, #56ca8b 20%, #67D499 55%, #7BE0AA 90%);
	}

	a{
		text-decoration: none;
		color: black;
	}
	label{
		color: red;
	}
</style>
	
<body style="background: #E9FFEE">
	
	<div id="main-table">
	<form id="form1" method="post" action="VIEW/xuly_dangnhap.php">
	<table cellpadding="5" cellspacing="2" align="center" style="margin-top: 100px">
		<tr>
			<td colspan="2" align=center>
				<h2><span style="color: #e5a513">KING</span><span style="color: #2645FF">LAND</span></h2> 
			</td>
		</tr>
		<tr>
			<td>Tên đăng nhập: </td>
			<td>
				<input name="txtuser" type="text" value="" />
				<label name="lbluser"></label>
			</td>
		</tr>
		<tr>
			<td>Mật khẩu: </td>
			<td>
				<input name="txtpw" type="password" value="" />
				<label name="lblpw"></label>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<button type="submit" name="btlg"> Đăng Nhập </button>&nbsp;&nbsp;
				<button type="reset">  Nhập Lại  </button>
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr align="center">
			<td>&nbsp;</td>
			<td>Nhấn vào <a href="VIEW/dangky.php" style="color: blue">đây</a> để đăng ký</td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<?php if(isset($_SESSION['tb_login'])) { ?>
					<label name="lbltb"><?=$_SESSION['tb_login']?></label>
			</td>
			<td>
				<?php unset($_SESSION['tb_login']); } else { ?>
					<label name="lbltb"></label>
				<?php } ?>
			</td>
		</tr>
	</table>
	</form>
	</div>

</body>
</html>
