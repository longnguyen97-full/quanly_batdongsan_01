<?php
	include('session_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Công Ty TNHH Bất Động Sản</title>
</head>

<?php
  include ('../conndb.php');
  $search = addslashes($_GET['search']);

  if(isset($_SESSION['CRUDS_NDT'])){
  	$sql = "SELECT * FROM NHADAUTU WHERE TEN_NDT LIKE '%$search%'";
  	$title = "Nhà Đầu Tư";
  }
  if(isset($_SESSION['CRUDS_NV'])){
  	$sql = "SELECT * FROM NHANVIEN WHERE TEN_NV LIKE '%$search%'";
  	$title = "Nhân Viên";
  }
  if(isset($_SESSION['CRUDS_KH'])){
  	$sql = "SELECT * FROM KHACHHANG WHERE HOTEN_KH LIKE '%$search%'";
  	$title = "Khách Hàng";
  }
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  error_reporting(0);
?>
<body>
<?php 
	if ($num > 0 && $search != "")
	{
		echo "<a href='CRUDS.php'>Back</a>";
		echo "<p align='center'>Số mẩu tin : " .$num. "</p>";
?>
<table width="1280" border=1 align="center" cellpadding="0" cellspacing="0">
	<tr><!-- Content -->
		<td colspan="2">
			<!-- open CONTENT --><div id="div-content" width="1080">
			<br/>
			<table border="1" align="center" width="1230" cellpadding="10" cellspacing="2">
				<tr><td colspan="7"><h3> Thông Tin <?=$title?> </h3></td></tr>
				<tr>
					<td width="20" align="center" valign="top"><strong> STT </strong></td>
					<td width="20" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="250" align="center" valign="top"><strong> HỌ TÊN </strong>  </td>
					<td width="200" align="center" valign="top"><strong> ĐỊA CHỈ </strong>  </td>
					<td width="200" align="center" valign="top"><strong> NGÀY SINH </strong>  </td>
					<td width="100" align="center" valign="top"><strong> SỐ ĐIỆN THOẠI </strong>  </td>
					<td width="100" align="center" valign="top"><strong>  THOIGIAN  </strong></td>
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
<?php
	}
	else{
		echo "<a href='CRUDS.php'>Back</a>";
		echo "<p align='center'>Không tìm thấy kết quả!</p>";
	}
?>
</body>
</html>