<?php
	$affectrow = 0;
	include('../conndb.php');

	$ma = $_GET['MA'];
	//-------------------- Cau Lenh Delete -----------------------
	$sql1 = "DELETE FROM NHADAUTU WHERE MA_NDT = '" .$ma. "'";
	$sql2 = "DELETE FROM KHACHHANG WHERE MA_KH = '" .$ma. "'";
	$sql3 = "DELETE FROM NHANVIEN WHERE MA_NV = '" .$ma. "'";
	//-------------------- Thuc Thi Cau Lenh Delete -----------------
	$result = mysqli_query($conn, $sql1);
	$result = mysqli_query($conn, $sql2);
	$result = mysqli_query($conn, $sql3);

	if($result){
		$affectrow = mysqli_affected_rows();
		mysqli_close($conn);
		header('location:CRUDS.php?MA=EDIT');
	}
?>
Số mẩu tin xóa <?= $affectrow?>