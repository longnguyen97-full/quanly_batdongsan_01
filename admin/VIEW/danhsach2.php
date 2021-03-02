<!DOCTYPE html>
<html>
<head>
<?php
	include ('../conndb.php');
	if(isset($_SESSION['CRUDS_NDT'])){
		$sql = "SELECT * FROM NHADAUTU ORDER BY MA_NDT";
		$title = "Nhà Đầu Tư";
	}
	if(isset($_SESSION['CRUDS_NV'])){
		$sql = "SELECT * FROM NHANVIEN ORDER BY MA_NV";
		$title = "Nhân Viên";
	}
	if(isset($_SESSION['CRUDS_KH'])){
		$sql = "SELECT * FROM KHACHHANG ORDER BY MA_KH";
		$title = "Khách Hàng";
	}
	$result = mysqli_query($conn, $sql);
?>	
</head>

<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->

<body>
	
<table width="1280" border=1 align="center" cellpadding="0" cellspacing="0">
	<tr><!-- Content -->

		<td colspan="2">
			<!-- open CONTENT --><div id="div-content" width="1080">
			<br/>
			<table border="1" align="center" width="1230" cellpadding="10" cellspacing="2">
				<tr><td colspan="8"><h3> Thông Tin <?=$title?> </h3></td></tr>
				<tr>
					<td width="20" align="center" valign="top"><strong> STT </strong></td>
					<td width="20" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="250" align="center" valign="top"><strong> HỌ TÊN </strong>  </td>
					<td width="200" align="center" valign="top"><strong> ĐỊA CHỈ </strong>  </td>
					<td width="200" align="center" valign="top"><strong> NGÀY SINH </strong>  </td>
					<td width="100" align="center" valign="top"><strong> SỐ ĐIỆN THOẠI </strong>  </td>
					<td width="100" align="center" valign="top"><strong>  THOIGIAN  </strong></td>
					<td width="100" align="center" valign="top"><strong>  HỢP ĐỒNG  </strong></td>
				</tr>
				<?php
					$i = 1;
					while ($rows = mysqli_fetch_array($result))
					{
				?>
				<tr>
					<td align="center"> <?=$i?> </td>
					<td align="center"> <?=$rows['MA_NDT']?><?=$rows['MA_NV']?><?=$rows['MA_KH']?> </td>
					<td align="center"> 
						<?=$rows['HO_NDT'], '&nbsp;', $rows['TENLOT_NDT'], '&nbsp;', $rows['TEN_NDT']?>
						<?=$rows['HO_NV'], '&nbsp;', $rows['TENLOT_NV'], '&nbsp;', $rows['TEN_NV']?>
						<?=$rows['HOTEN_KH']?>
					</td>
					<td align="center"> <?=$rows['DCHI_NDT']?><?=$rows['DCHI_NV']?><?=$rows['DCHI_KH']?> </td>
					<td align="center"> <?=$rows['NGSINH_NDT']?><?=$rows['NGSINH_NV']?><?=$rows['NGSINH_KH']?> </td>
					<td align="center"> <?=$rows['SDT_NDT']?><?=$rows['SDT_NV']?><?=$rows['SDT_KH']?> </td>
					<td align="center"> <?=$rows['THOIGIAN']?> </td>
					<td align="center"> <?=$rows['HANG_MUA']?> </td>
				</tr>
				<?php
				$i = $i + 1;
					}
				?>
			</table>
			</div><!-- close CONTENT -->	
		</td>
		
	</tr>
</table>
	
</body>
</html>

		
