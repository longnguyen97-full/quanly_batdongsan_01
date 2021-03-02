<?php
	include("session_login.php");
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include('../conndb.php');
	if(isset($_SESSION['CRUDS_BDS'])){
		$sql = "SELECT * FROM BATDONGSAN ORDER BY MA_BDS";
		$title = "Bất Động Sản"; $vt = "VỊ TRÍ"; $gb = "GIÁ BÁN"; $ten = "TÊN";
	}
	if(isset($_SESSION['CRUDS_BT'])){
		$sql = "SELECT * FROM BANTIN ORDER BY MABTIN";
		$title = "Bản Tin"; $ndtt = "TÓM TẮT"; $ndct = "NỘI DUNG"; $ten = "TÊN";
	}
	$result = mysqli_query($conn, $sql);
?>
<style type="text/css">
	.sbmdelall{
		padding: 8px 5px 8px 5px;
		border-radius: 3px;
		border: 1px solid gray;
		outline: none;
	}
	.sbmdelall:hover{
		cursor: pointer;
		background-color: #ddd;
	}
	.sbmdelall:active{

	}
</style>
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
					<td colspan="4" style="border-right: none;">
						<h3> Hiệu Chỉnh <?=$title?> </h3>
					</td>
					<td colspan="7" style="border-left: none;">
					<div align="center">
						<?php $result = mysqli_query($conn, $sql);?>
						<form id="form2" name="form2" method="get">
							<span>
								<span>Chọn <?=$title?></span>
								<label for="MA"></label>
								<select name="MA" id="MA">
							<?php
								while ($rows = mysqli_fetch_array($result))
								{
							?>
								<option value="<?=$rows['MA_BDS']?><?=$rows['MABTIN']?>"><?=$rows['MA_BDS']?><?=$rows['MABTIN']?>&nbsp;
								 |&nbsp; <?=$rows['TEN_BDS']?><?=$rows['TENBTIN']?></option>
							<?php
								}
							?>
								</select>
								<span><input type="button" name="cmbedit" id="cmbedit" value="Sửa"
									onclick='this.form.action = "form_hieuchinh1.php";
									this.form.submit();' /></span>
								<span><input type="button" name="cmbdel" id="cmbdel" value="Xóa"
									onclick='this.form.action = "xuly_xoa1.php";
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
					<td width="100" align="center" valign="top"><strong> <?=$ten?> </strong>  </td>
					<td width="200" align="center" valign="top"><strong> <?=$vt?><?=$ndtt?> </strong>  </td>
					<td width="200" align="center" valign="top"><strong> <?=$gb?><?=$ndct?> </strong>  </td>
					<td width="" align="center" valign="top"><strong> HINH </strong>  </td>
					<td width="100" align="center" valign="top"><strong>  THOIGIAN  </strong></td>
					<td width="10" align="center" valign="top"><strong> Edit </strong>  </td>
					<td width="10" align="center" valign="top"><strong>  Del </strong></td>
					<td width="10" align="center" valign="top"><strong>  Select<input type="checkbox" onClick="toggle(this)"> </strong></td>
				</tr>
				<?php
					$i = 1;
					while ($rows = mysqli_fetch_array($result))
					{
				?>
				<tr>
					<td align="center"> <?=$i?> </td>
					<td align="center"> <?=$rows['MA_BDS']?><?=$rows['MABTIN']?> </td>
					<td align="center"> <?=$rows['TEN_BDS']?><?=$rows['TENBTIN']?> </td>
					<td align="center"> <?=$rows['VITRI_BDS']?><?=$rows['NOIDUNG_TT']?> </td>
					<td align="center"> <?=$rows['gia_ban']?><?=$rows['NOIDUNG_CT']?> </td>
					<td align="center"> <?php echo('<img src="data:image/png; base64, '.base64_encode($rows['HINH']).'" width="400" />')?> </td>
					<td align="center"> <?=$rows['THOIGIAN']?> </td>
					<td align="center"><a href="form_hieuchinh1.php?MA=<?=$rows['MA_BDS']?><?=$rows['MABTIN']?>">Edit</a></td>
					<td align="center"><a href="xuly_xoa1.php?MA=<?=$rows['MA_BDS']?><?=$rows['MABTIN']?>">Del</a></td>
					<td align="center"><input type="checkbox" name="checkbox[]" value="<?=$rows['MA_BDS']?><?=$rows['MABTIN']?>" /></td>
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

		
