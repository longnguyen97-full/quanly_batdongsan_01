<?php
	include('session_login.php');
?>
<!DOCTYPE html>
<html>
<head>
<?php
	include('../conndb.php');
	$ma = $_GET['MA'];

	if(isset($_SESSION['CRUDS_NDT'])){
		$sql = "SELECT * FROM NHADAUTU WHERE MA_NDT = '".$ma."'";
		$title = "Nhà Đầu Tư";
	}
	if(isset($_SESSION['CRUDS_KH'])){
		$sql = "SELECT * FROM KHACHHANG WHERE MA_KH = '".$ma."'";
		$title = "Khách Hàng";
	}
	if(isset($_SESSION['CRUDS_NV'])){
		$sql = "SELECT * FROM NHANVIEN WHERE MA_NV = '".$ma."'";
		$title = "Nhân Viên";
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
	<form id="form1" name="form1" method="post" action="xuly_hieuchinh2.PHP">
	 <table width="1230" border="0" cellspacing="2" cellpadding="2">
		 <tr>
			 <td width="34">MÃ</td>
			 <td width="252">
			 	<input type="text" name="txtma" value="<?=$rows['MA_NDT']?><?=$rows['MA_KH']?><?=$rows['MA_NV']?>" readonly />
			 </td>
		 </tr>
		 <tr>
			 <td>HỌ TÊN</td>
			 <td width="252">
			 	<textarea name="txtten" cols="50" rows="1"><?=$rows['TEN_NDT']?><?=$rows['HO_KH'], '&nbsp;', $rows['TENLOT_KH'], '&nbsp;', $rows['TEN_KH']?><?=$rows['HO_NV'], '&nbsp;', $rows['TENLOT_NV'], '&nbsp;', $rows['TEN_NV']?></textarea>
			 </td>
		 </tr>
		 <tr>
			 <td>ĐỊA CHỈ</td>
			 <td width="252">
			 	<textarea name="txtdchi" cols="50" rows="4"><?=$rows['DCHI_NDT']?><?=$rows['DCHI_KH']?><?=$rows['DCHI_NV']?>
			 	</textarea>
			 </td>
		 </tr>
		 <tr>
			 <td>NGÀY SINH</td>
			 <td width="252">
			 	<input type="text" name="txtngsinh"
			 	value="<?=$rows['NGSINH_NDT']?><?=$rows['NGSINH_KH']?><?=$rows['NGSINH_NV']?>"
				/>
			 </td>
		 </tr>
		 <tr>
			 <td>SỐ ĐIỆN THOẠI</td>
			 <td width="252">
			 	<input type="text" name="txtsdt"
			 	value="<?=$rows['SDT_NDT']?><?=$rows['SDT_KH']?><?=$rows['SDT_NV']?>"
				/>
			 </td>
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