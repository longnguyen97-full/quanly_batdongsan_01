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

  if(isset($_SESSION['CRUDS_BDS'])){
  	$sql = "SELECT * FROM BATDONGSAN WHERE TEN_BDS LIKE '%$search%'";
  	$title = "Bất Động Sản"; $vt = "VỊ TRÍ"; $gb = "GIÁ BÁN"; $ten = "TÊN";
  }
  if(isset($_SESSION['CRUDS_BT'])){
  	$sql = "SELECT * FROM BANTIN WHERE TENBTIN LIKE '%$search%'";
  	$title = "Bản Tin"; $ndtt = "TÓM TẮT"; $ndct = "NỘI DUNG"; $ten = "TÊN";
  }
  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  error_reporting(0);
?>
<body>
<?php 
	if ($num > 0 && $search != "")
	{
		echo "<a href='CRUDS.php?MA=SEARCH'>Back</a>";
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
					<td width="100" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="150" align="center" valign="top"><strong> <?=$ten?> </strong>  </td>
					<td width="200" align="center" valign="top"><strong> <?=$vt?><?=$ndtt?> </strong>  </td>
					<td width="400" align="center" valign="top"><strong> <?=$gb?><?=$ndct?> </strong>  </td>
					<td width="" align="center" valign="top"><strong> HINH </strong>  </td>
					<td width="100" align="center" valign="top"><strong>  THOIGIAN  </strong></td>
					<td width="100" align="center" valign="top"><strong>  Del  </strong></td>
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
					<td align="center"><a href="xuly_xoa1.php?MA=<?=$rows['MA_BDS']?><?=$rows['MABTIN']?>">Del</a></td>
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
		echo "<a href='CRUDS.php?MA=SEARCH'>Back</a>";
		echo "<p align='center'>Không tìm thấy kết quả!</p>";
	}
?>
</body>
</html>