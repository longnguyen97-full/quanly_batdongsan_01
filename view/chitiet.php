<?php include("frame/CONTENT_IMG_others.php");?>
<?php
	if(isset($malv_ct)) {
		$sql = "SELECT * FROM BANTIN WHERE MABTIN = '".$malv_ct."'";
		$result = mysqli_query($conn, $sql);
	}
?>
<!DOCTYPE html>
<html>	
<body>

	<!-- div 4 MAINT CONTENT -->
	<div align="center" width="100%">

		<div class="dv-title"> <h1> BẢN TIN </h1> </div>
		<h2 style="color: #DD940B"> BẢN TIN</h2>
		<div class="dv-tb">
			<table class="tb-bd" width="1200" cellspacing="0" cellpadding="0" border="1">
				<tr align="center">
					<td width="50"><strong>STT</strong></td>
					<td width="100"><strong>Mã Số</strong></td>
					<td width="100"><strong>Tiêu Đề</strong></td>
					<td width="100"><strong>Nội Dung Tóm Tắt</strong></td>
					<td width="400"><strong>Nội Dung Chi Tiết</strong></td>
					<td width=""><strong>Hình</strong></td>
					<td width="100"><strong>Thời Gian</strong></td>
				</tr>
			<?php			
				$i = 1;
				while ($rows = mysqli_fetch_array($result))
				{
			?>
			<tr>
				<td align="center"> <?=$i?> </td>
				<td align="center"> <?=$rows['MABTIN']?> </td>
				<td align="center"> <?=$rows['TENBTIN']?> </td>
				<td align="center"> <?=$rows['NOIDUNG_TT']?> </td>
				<td align="center"> <?=$rows['NOIDUNG_CT']?> </td>
				<td align="center"> <?php echo('<img src="data:image/png; base64, '.base64_encode($rows['HINH']).'" width="400" />')?> </td>
				<td align="center"> <?=$rows['THOIGIAN']?> </td>
			<?php
			$i = $i + 1;
				}
			?>
			</table>
		</div>
	</div>

</body>
</html>