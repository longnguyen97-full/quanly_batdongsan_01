<?php
	include('../DKY_DNHAP/session_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include('../conndb.php');
	if(isset($_SESSION['CRUDS_NDT'])){
		$sql = "SELECT * FROM NHADAUTU ORDER BY MA_NDT";
		$title = "Nhà Đầu Tư";
	}
	if(isset($_SESSION['CRUDS_KH'])){
		$sql = "SELECT * FROM KHACHHANG ORDER BY MA_KH";
		$title = "Khách Hàng";
	}
	if(isset($_SESSION['CRUDS_NV'])){
		$sql = "SELECT * FROM NHANVIEN ORDER BY MA_NV";
		$title = "Nhân Viên";
	}
	$result = mysqli_query($conn, $sql);
?>
<script type="text/javascript">
	function toggle(source){
		checkboxes = document.getElementsByName('checkbox[]');
		for(var i = 0; i < checkboxes.length; i++){
			checkboxes[i].checked = source.checked;
		}
	}
</script>
</head>

<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->

<body>
	
<table width="1280" border=1 align="center" cellpadding="0" cellspacing="0">
	<tr><!-- Content -->

		<td colspan="2">
			<!-- open CONTENT --><div id="div-content" width="1080">
			<br/>
			
			<table border="1" align="center" width="1230" cellpadding="10" cellspacing="2">
				<tr>
					<td colspan="3" style="border-right: none;">
						<h3> Hiệu Chỉnh <?=$title?> </h3>
					</td>
					<td colspan="7" style="border-left: none;">
					<div align="center">
						<?php $result = mysqli_query($conn, $sql);?>
						<form id="form1" name="form1" method="get">
							<span>
								<span>Chọn <?=$title?></span>
								<label for="MA"></label>
								<select name="MA" id="MA">
							<?php
								while ($rows = mysqli_fetch_array($result))
								{
							?>
								<option value="<?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?>"><?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?>&nbsp;
								 |&nbsp; <?=$rows['TEN_NDT']?>
								 <?=$rows['HO_KH'], '&nbsp;', $rows['TENLOT_KH'], '&nbsp;', $rows['TEN_KH']?>
								 <?=$rows['HO_NV'], '&nbsp;', $rows['TENLOT_NV'], '&nbsp;', $rows['TEN_NV']?></option>
							<?php
								}
							?>
								</select>
								<span><input type="button" name="cmbedit" id="cmbedit" value="Sửa"
									onclick='this.form.action = "form_hieuchinh2.php";
									this.form.submit();' /></span>
								<span><input type="button" name="cmbdel" id="cmbdel" value="Xóa"
									onclick='this.form.action = "xuly_xoa2.php";
									this.form.submit();' /></span>
							</span>
						</form>
					</div>
					</td>
				</tr>
				<form id="form1" name="form1" method="post" action="xuly_xoaall.php">
				<?php $result = mysqli_query($conn, $sql);?>
				<tr>
					<td width="20" align="center" valign="top"><strong> STT </strong></td>
					<td width="20" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="250" align="center" valign="top"><strong> HỌ TÊN </strong>  </td>
					<td width="200" align="center" valign="top"><strong> ĐỊA CHỈ </strong>  </td>
					<td width="200" align="center" valign="top"><strong> NGÀY SINH </strong>  </td>
					<td width="100" align="center" valign="top"><strong> SỐ ĐIỆN THOẠI </strong>  </td>
					<td width="100" align="center" valign="top"><strong>  THOIGIAN  </strong></td>
					<td width="100" align="center" valign="top"><strong> Edit </strong>  </td>
					<td width="100" align="center" valign="top"><strong>  Del </strong></td>
					<td width="10" align="center" valign="top"><strong>  Select<input type="checkbox" onClick="toggle(this)"> </strong></td>
				</tr>
				<?php
					$i = 1;
					while ($rows = mysqli_fetch_array($result))
					{
				?>
				<tr>
					<td align="center"> <?=$i?> </td>
					<td align="center"> <?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?> </td>
					<td align="center"> 
						<?=$rows['HO_NDT'], '&nbsp;', $rows['TENLOT_NDT'], '&nbsp;', $rows['TEN_NDT']?>
						<?=$rows['HOTEN_KH']?>
						<?=$rows['HO_NV']?>&nbsp;<?=$rows['TENLOT_NV']?>&nbsp;<?=$rows['TEN_NV']?>
					</td>
					<td align="center"> <?=$rows['DCHI_NDT']?><?=$rows['DCHI_KH']?><?=$rows['DCHI_NV']?> </td>
					<td align="center"> <?=$rows['NGSINH_NDT']?><?=$rows['NGSINH_KH']?><?=$rows['NGSINH_NV']?> </td>
					<td align="center"> <?=$rows['SDT_NDT']?><?=$rows['SDT_KH']?><?=$rows['SDT_NV']?> </td>
					<td align="center"> <?=$rows['THOIGIAN']?> </td>
					<td align="center"><a href="form_hieuchinh2.php?MA=<?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?>">Edit</a></td>
					<td align="center"><a href="xuly_xoa2.php?MA=<?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?>">Del</a></td>
					<td align="center"><input type="checkbox" name="checkbox[]" value="<?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?>" /></td>
				</tr>
				<?php
				$i = $i + 1;
					}
				?>
				<tr>
					<td colspan="9">&nbsp;</td>
					<td align="center">
						<input type="submit" name="delete" value="Delete" />
						</form>
					</td>
				</tr>
			</table>
			
			</div><!-- close CONTENT -->	
		</td>
		
	</tr>
</table>
	
</body>
</html>

		
