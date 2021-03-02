<?php
	include ('../conndb.php');
	
	$ma = $_POST['txtma'];
	$ten = $_POST['txtten'];
	$vt_nd = $_POST['txtvt_nd'];
	$gt_nd = $_POST['txtgt_nd'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

	//-------------------- Cau Lenh UpDate -----------------------
	$sql1 = "UPDATE BATDONGSAN SET TEN_BDS='".$ten."', VITRI_BDS='".$vt_nd."', GIOITHIEU='".$gt_nd."', HINH='{$image}' WHERE MA_BDS='".$ma."'";
	
	$sql2 = "UPDATE BANTIN SET TENBTIN='".$ten."', NOIDUNG_TT='".$vt_nd."', NOIDUNG_CT='".$gt_nd."', HINH='{$image}' WHERE MABTIN='".$ma."'";
	//-------------------- Thuc Thi Cau Lenh Update -----------------
	$result = mysqli_query($conn, $sql1);
	$result = mysqli_query($conn, $sql2);
	
	if ($result){
		header('location:CRUDS.PHP'); //Chuyen Huong Trang Web
	}
?>