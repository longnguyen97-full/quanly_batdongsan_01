<?php
	include("session_login.php");
?>
<!DOCTYPE html>
<html>
<head>
<?php
	if(isset($_SESSION['CRUDS_BDS'])){
		$title = "Bất Động Sản"; $vt = "VỊ TRÍ"; $gt = "GIỚI THIỆU"; $ten = "TÊN"; $matudongtang = "BDS";
	}
	if(isset($_SESSION['CRUDS_BT'])){
		$title = "Bản Tin"; $ndtt = "TÓM TẮT"; $ndct = "NỘI DUNG"; $ten = "TÊN";
		$matudongtang = $chonma = "";
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
<form id="form1" name="form1" method="post" action="xuly_them1.php" enctype="multipart/form-data">
	<table width="1230" align="center" border="0" cellspacing="2" cellpadding="10">
		<tr><td colspan="3"><h3> Thêm <?=$title?> </h3></td></tr>
		<tr>
			<td width="134">Mã Số (*)</td>
			<td width="252" style="color: red"><label for="textfield"></label>
				<?php if(isset($_SESSION['tb'])) { ?>
					<label name="lblma">Nhập Số</label>
					<input type="text" name="txtma" size="20" autofocus value="<?=$_SESSION['ma']?>"placeholder=<?=$matudongtang?> />
					&nbsp;
					<?=$_SESSION['tb']?>
			</td>
				<?php } else { ?>
					<label name="lblma">Nhập Số</label>
					<input type="text" name="txtma" size="20" placeholder=<?=$matudongtang?> />
					<?php
						if(isset($chonma)){
							echo "<select name='btin'>
							<option value='chonma' disabled selected>Chọn Mã</option>
							<option value='GKL'>Góc KingLand</option>
							<option value='TT'>Tin Tức</option>
							<option value='KT'>Kiến Thức</option>
							<option value='TD'>Tuyển Dụng</option>
							</select>";
						}
					?>
				<?php } ?>
		</tr>
		
		<tr>
			<td><?=$ten?></td>
			<td width="252">
				 <textarea name="txtten" rows="3" cols="30"></textarea>
			</td>
		</tr>
		<tr>
			<td><?=$vt?><?=$ndtt?></td>
			<td width="252">
				 <textarea name="txtvt_nd" rows="3" cols="30"></textarea>
			</td>
		</tr>
		<tr>
			<td><?=$gt?><?=$ndct?></td>
			<td width="252">
				<textarea name="txtgt_nd" rows="20" cols="100"></textarea>
			</td>
		</tr>
		<tr>
			<td>Hình Ảnh</td>
			<td width="252"><input type="file" name="image" /></td>
		</tr>
		<tr>
			<td></td>
			<td width="252">
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

		
