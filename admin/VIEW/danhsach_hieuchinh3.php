<?php
	include("session_login.php");
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include('../conndb.php');
	$sql = "SELECT * FROM LINHVUC";
	$title = "Danh Mục"; $ten = "TÊN"; $domain = "Tên Miền";
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
					<td style="border-right: none;">
						<h3> Hiệu Chỉnh <?=$title?> </h3>
					</td>
					<td colspan="6" style="border-left: none;">
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
								<option value="<?=$rows['MALV']?>"><?=$rows['MALV']?>&nbsp;
								 |&nbsp; <?=$rows['TENLV']?></option>
							<?php
								}
							?>
								</select>
								<span><input type="button" name="cmbedit" id="cmbedit" value="Sửa"
									onclick='this.form.action = "form_hieuchinh3.php";
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
					<td width="100" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="150" align="center" valign="top"><strong> TÊN </strong>  </td>
					<td width="150" align="center" valign="top"><strong> Tên Miền </strong>  </td>
					<td width="50" align="center" valign="top"><strong> Edit </strong>  </td>
					<td width="50" align="center" valign="top"><strong>  Del </strong></td>
					<td width="50" align="center" valign="top"><strong>  Select<br><input type="checkbox" onClick="toggle(this)"> </strong></td>
				</tr>
				<?php
					$i = 1;
					while ($rows = mysqli_fetch_array($result))
					{
				?>
				<tr>
					<td align="center"> <?=$i?> </td>
					<td align="center"> <?=$rows['MALV']?> </td>
					<td align="center"> <?=$rows['TENLV']?>	</td>
					<td align="center"> <?=$rows['Short_String']?>	</td>
					<td align="center"><a href="form_hieuchinh3.php?MA=<?=$rows['MALV']?>">Edit</a></td>
					<td align="center"><a href="xuly_xoa3.php?MA=<?=$rows['MALV']?>">Del</a></td>
					<td align="center"><input type="checkbox" name="checkbox[]" value="<?=$rows['MALV']?>" /></td>
				</tr>
				<?php
				$i = $i + 1;
					}
				?>
				<tr>
					<td colspan="6">&nbsp;</td>
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

		
