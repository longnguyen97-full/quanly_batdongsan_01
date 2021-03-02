<?php
	include ('../conndb.php');
	
	$ma = $_POST['txtma'];
	$ten = $_POST['txtten'];
	$vt_nd = $_POST['txtvt_nd'];
	$gt_nd = $_POST['txtgt_nd'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

	//
	if(strlen($vt_nd) > 200 ){
		$stringCut = substr($vt_nd, 0, 180);
		$endPoint = strrpos($vt_nd, ' ');

		$vt_nd = $endPoint? substr($vt_nd, 0, $endPoint) : substr($stringCut, 0);
		$vt_nd = $stringCut. '... ';
	}

	//-------------------- Cau Lenh UpDate -----------------------
	$sql1 = "UPDATE BATDONGSAN SET TEN_BDS='".$ten."', VITRI_BDS='".$vt_nd."', GIOITHIEU='".$gt_nd."', HINH='{$image}' WHERE MA_BDS='".$ma."'";
	
	$sql2 = "UPDATE BANTIN SET TENBTIN='".$ten."', NOIDUNG_TT='".$vt_nd."', NOIDUNG_CT='".$gt_nd."', HINH='{$image}' WHERE MABTIN='".$ma."'";
	//-------------------- Thuc Thi Cau Lenh Update -----------------
	$result = mysqli_query($conn, $sql1);
	$result = mysqli_query($conn, $sql2);
	
	if ($result){
		header('location:CRUDS.php?MA=EDIT'); //Chuyen Huong Trang Web
	}
?>