<?php
	include("session_login.php");
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include('../conndb.php');
	$ma = $_GET['MA'];

	if(isset($_SESSION['CRUDS_BDS'])){
		$sql = "SELECT * FROM BATDONGSAN WHERE MA_BDS = '".$ma."'";
		$title = "Bất Động Sản"; $vt = "VỊ TRÍ"; $gt = "GIỚI THIỆU"; $ten = "TÊN";
	}
	if(isset($_SESSION['CRUDS_BT'])){
		$sql = "SELECT * FROM BANTIN WHERE MABTIN = '".$ma."'";
		$title = "Bản Tin"; $ndtt = "TÓM TẮT"; $ndct = "NỘI DUNG"; $ten = "TÊN";
	}
	$result = mysqli_query($conn, $sql);
  	error_reporting(0);
	while ($rows = mysqli_fetch_array($result))
	{
?>
</head>

<style>
	#display_image{
    	display: none;
	}
	#show_display_img{
		text-decoration: none;
		color: black;
	}
</style>
<script type="text/javascript">
	function show_display_img()
    {
    	// Lấy thẻ nutxem và thẻ mohinh 
        var nutxem = document.getElementById('show_display_img');
        var mohinh = document.getElementById('display_image');
             
        // Lấy nội dung của thẻ nutxem
        var text = nutxem.innerHTML;
             
        // Kiểm tra xử lý hiển thị và ẩn + đổi nội dung thẻ nutxem
        if (text == 'Xem'){
        	mohinh.style.display = "table-row";
            	nutxem.innerHTML = "Đóng";
		}
        else{
        	mohinh.style.display = "none";
            nutxem.innerHTML = "Xem";
		}
             
        // Return false để khi click vào thẻ a sẽ không bị chuyển trang
        return false;
	}
</script>
	
<body>
	<a href="CRUDS.php">Back</a>
	<h3 align="center">Hiệu Chỉnh <?=$title?></h3>
	<form id="form1" name="form1" method="post" action="xuly_hieuchinh1.php" enctype="multipart/form-data">
	 <table width="1024" border="0" cellspacing="2" cellpadding="2">
		 <tr>
			 <td width="134">MÃ</td>
			 <td width="252">
			 	<input type="text" name="txtma" value="<?=$rows['MA_BDS']?><?=$rows['MABTIN']?>" readonly />
			 </td>
		 </tr>
		 <tr>
			 <td><?=$ten?></td>
			 <td width="252">
				 <textarea name="txtten" rows="3" cols="30"><?=$rows['TEN_BDS']?><?=$rows['TENBTIN']?></textarea>
			 </td>
		 </tr>
		 <tr>
			 <td><?=$vt?><?=$ndtt?></td>
			 <td width="252">
				 <textarea name="txtvt_nd" rows="20" cols="100"><?=$rows['VITRI_BDS']?><?=$rows['NOIDUNG_TT']?></textarea>
			 </td>
		 </tr>
		 <tr>
			 <td><?=$gt?><?=$ndct?></td>
			 <td width="252">
				 <textarea name="txtgt_nd" rows="20" cols="100"><?=$rows['GIOITHIEU']?><?=$rows['NOIDUNG_CT']?></textarea>
			 </td>
		 </tr>
		<tr>
			<td>Thêm Mới Ảnh</td>
			<td width="252"><input type="file" name="image" /></td>
		</tr>
		<tr>
			<td>Ảnh Hiện Tại</td>
			<td><button><a href="#" id="show_display_img" onclick="show_display_img()">Xem</a></button></td>
		</tr>
		 <tr><td>&nbsp;</td>
			 <td id="display_image"><?php echo('<img src="data:image/png; base64, '.base64_encode($rows['HINH']).'" width="400" />')?></td>
		 </tr>
		 <tr>
			 <td>
				 <input type="submit" name="cmbsm" value="Submit" />
				 <input type="reset" name="cmbrs" value="Reset" />
			 </td>
		 </tr>

	 </table>
	</form>

<?php
	} //KT While
?>

</body>
</html>