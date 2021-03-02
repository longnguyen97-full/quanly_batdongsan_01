<?php
	include('../DKY_DNHAP/session_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<?php
	if(isset($_SESSION['CRUDS_NDT'])){
		$title = "Nhà Đầu Tư"; $matudongtang = "NDT";
	}
	if(isset($_SESSION['CRUDS_KH'])){
		$title = "Khách Hàng"; $matudongtang = "KH";
	}
	if(isset($_SESSION['CRUDS_NV'])){
		$title = "Nhân Viên"; $matudongtang = "NV";
	}
	error_reporting (E_ALL ^ E_NOTICE);
?>
</head>
<body>
<?php
	if(isset($_SESSION['back'])){
		echo "<a href='CRUDS.php'>Back</a>";
	}
?>
<table width="1280" border=1 align="center" cellpadding="0" cellspacing="0">
	<tr><!-- Content -->

		<td colspan="2">
			<!-- open CONTENT --><div id="div-content" width="1230">
			<br/>
<form id="form1" name="form1" method="post" action="xuly_them2.php">
	<table width="1230" align="center" border="0" cellspacing="2" cellpadding="10">
		<tr><td colspan="3"><h3> Thêm <?=$title?> </h3></td></tr>
		<tr>
			<td width="134">MÃ (*)</td>
			<td width="252" style="color: red"><label for="textfield"></label>
				<?php if(isset($_SESSION['tb'])) { ?>
					<label name="lblma">Nhập Số</label>
					<input placeholder=<?=$matudongtang?> type="text" name="txtma" size="20" autofocus value="<?=$_SESSION['ma']?>" />
					&nbsp;
					<?=$_SESSION['tb']?>
			</td>
				<?php } else { ?>
					<label name="lblma">Nhập Số</label>
					<input placeholder=<?=$matudongtang?> type="text" name="txtma" size="20" />
				<?php } ?>
		</tr>
		 <tr>
			 <td>HỌ TÊN</td>
			 <td width="252">
			 	<textarea name="txtten" cols="50" rows="1"><?=$rows['TEN_NDT']?><?=$rows['HO_KH'], '&nbsp;', $rows['TENLOT_KH'], '&nbsp;', $rows['TEN_KH']?><?=$rows['HO_NV'], '&nbsp;', $rows['TENLOT_NV'], '&nbsp;', $rows['TEN_NV']?></textarea>
			 </td>
		 </tr>
		 <tr>
			 <td>ĐỊA CHỈ</td>
			 <td width="252">
			 	<textarea name="txtdchi" cols="50" rows="4"><?=$rows['DCHI_NDT']?><?=$rows['DCHI_KH']?><?=$rows['DCHI_NV']?>
			 	</textarea>
			 </td>
		 </tr>
		 <tr>
			 <td>NGÀY SINH</td>
			 <td width="252">
			 	<input type="text" name="txtngsinh"
			 	value="<?=$rows['NGSINH_NDT']?><?=$rows['NGSINH_KH']?><?=$rows['NGSINH_NV']?>"
				/>
			 </td>
		 </tr>
		 <tr>
			 <td>SỐ ĐIỆN THOẠI</td>
			 <td width="252">
			 	<input type="text" name="txtsdt"
			 	value="<?=$rows['SDT_NDT']?><?=$rows['SDT_KH']?><?=$rows['SDT_NV']?>"
				/>
			 </td>
		 </tr>
		 <tr>
			 <td>
				 <input type="submit" name="cmbsm" value="Submit" />
				 <input type="reset" name="cmbrs" value="Reset" />
			 </td>
		 </tr>
	</table>
</form>
			
			</div><!-- close CONTENT -->	
		</td>
		
	</tr>
</table>

<?php
	if(isset($_SESSION['tb']))
	{
?>
<?php
		unset($_SESSION['tb']);
	}
?>

</body>
</html>

		
