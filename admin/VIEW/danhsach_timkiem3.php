<?php
	include('session_login.php');
?>
<!DOCTYPE html>
<html>
<head>
</head>

<?php
  include ('../conndb.php');
  $search = addslashes($_GET['search']);
	  
  $sql = "SELECT * FROM LINHVUC WHERE TENLV LIKE '%$search%'";
  
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
				<tr><td colspan="7"><h3> Thông Tin Danh Mục </h3></td></tr>
				<tr>
					<td width="20" align="center" valign="top"><strong> STT </strong></td>
					<td width="100" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="150" align="center" valign="top"><strong> Tên </strong>  </td>
					<td width="150" align="center" valign="top"><strong> <?=$domain?> </strong>  </td>
				</tr>
				<?php
					$i = 1;
					while ($rows = mysqli_fetch_array($result))
					{
				?>
				<tr>
					<td align="center"> <?=$i?> </td>
					<td align="center"> <?=$rows['MALV']?> </td>
					<td align="center"> <?=$rows['TENLV']?> </td>
					<td align="center"> <?=$rows['Short_String']?> </td>
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