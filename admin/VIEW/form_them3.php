<?php
	include("session_login.php");
?>
<!DOCTYPE html>
<html>
<head>
<?php
	$title = "Danh Mục"; $ten = "TÊN"; $domain = "Tên Miền"; $matudongtang = "BDS";
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
<form id="form1" name="form1" method="post" action="xuly_them3.php" enctype="multipart/form-data">
	<table width="1230" align="center" border="0" cellspacing="2" cellpadding="10">
		<tr><td colspan="3"><h3> Thêm <?=$title?> </h3></td></tr>
		<tr>
			<td width="134">Mã: </td>
			<td><input name="txtma" type="text" /></td>
		</tr>
		<tr>
			<td>Tên lĩnh vực: </td>
			<td><input name="txttenlv" type="text" /></td>
		</tr>
		<tr>
			<td>Domain: </td>
			<td><input name="txtdomain" type="text" /></td>
		</tr>
		<tr>
			<td>Thứ Tự: </td>
			<td><input name="txtord" type="text" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				 <input type="submit" name="cmbsm" value="Submit" />
				 <input type="reset" name="cmbrs" value="Reset" />
			 </td>
			<td>&nbsp;</td>
		</tr>
		<tr><td colspan="3"><?php error_reporting(0); ?><?=$_SESSION['tb']?></td></tr>
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

		
