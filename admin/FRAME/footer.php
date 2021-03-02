<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>

<table width="1280" border=0 align="center" cellpadding="0" cellspacing="0">
	<tr><!-- Footer -->
		<td style="border-top: none; border-bottom: none;"></td>
		<td class="table-row2--column2 inherit" colspan="2" valign="top">
			<?php
				if(isset($_SESSION['khoa'])){
					echo "<p align='center'>Quyền quản lý hiện tại: <strong>Nhân Viên</strong></p>";
				}else{
					echo "<p align='center'>Quyền quản lý hiện tại: <strong>Quản Lý</strong></p>";
				}
			?>
			<!-- <p align="center">Quyền quản lý hiện tại: <strong><?=$_SESSION['username']?></strong></p> -->
		</td>
	</tr>
</table>

</body>
</html>