<?php 
	include("session_login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Công Ty TNHH Bất Động Sản</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../css_admin/multiple_menu.css">
</head>

<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->

<body>

<table width="1280" border=1 align="center" cellpadding="0" cellspacing="0">

	<tr><td colspan="2"><?php include("../FRAME/header.php")?></td></tr>
	<tr style="line-height:auto;">
		<td>
			<div class="container">
				<!-- Chọn các tùy chọn tương ứng và tạo mã. Mã được dùng kiểm tra để hiển thị, hiệu chỉnh, thêm, tìm kiếm -->
				<h3 style="margin-left: 25px"><a href="linhvuc.php">Mục Quản Lý</a></h3>
				<ul class="">
					<li ><a href="linhvuc.php?MA=DM">Danh Mục</a></li>
					<li class="">
						<a tabindex="-1" href="#">Nội Dung</a>
						<ul class="">
							<li class=""><a tabindex="-1" href="linhvuc.php?MA=BDS">Bất Động Sản</a></li>
							<li class=""><a href="linhvuc.php?MA=NDT">Nhà Đầu Tư</a></li>
							<li class=""><a href="linhvuc.php?MA=NV">Nhân Viên</a></li>
							<li class=""><a href="linhvuc.php?MA=KH">Khách Hàng</a></li>
							<li class=""><a href="linhvuc.php?MA=BT">Bản Tin</a></li>
						</ul>
					</li>
					<li ><a href="change_password.php">Đổi Mật Khẩu</a></li>
				</ul>
			</div>
		</td>
		<td>
			<div class="container_right">
				<?php include("../FRAME/gioithieu.php")?>
			</div>
		</td>
	</tr>
	<tr><td colspan="2"><?php include("filter.php")?></td></tr>
	<tr><td colspan="2"><?php include("../FRAME/footer.php")?></td></tr>

</table>

</body>
</html>