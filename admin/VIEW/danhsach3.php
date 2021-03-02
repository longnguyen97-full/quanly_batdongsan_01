<!DOCTYPE html>
<html>
<head>
<?php
	include ('../conndb.php');
	
	if(isset($_SESSION['DM'])){
		$sql = "SELECT * FROM LINHVUC";
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
				<tr><td colspan="7"><h3> Thông Tin <?=$title?> </h3></td></tr>
				<tr>
					<td width="20" align="center" valign="top"><strong> STT </strong></td>
					<td width="100" align="center" valign="top"><strong> MÃ SỐ </strong>  </td>
					<td width="150" align="center" valign="top"><strong> Tên </strong>  </td>
					<td width="150" align="center" valign="top"><strong> Tên Miền </strong>  </td>
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

</body>
</html>

		
