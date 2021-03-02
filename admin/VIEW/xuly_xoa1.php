<?php
	$affectrow = 0;
	include('../conndb.php');

	$ma = $_GET['MA'];
	//-------------------- Cau Lenh Delete -----------------------
	$sql1 = "DELETE FROM BATDONGSAN WHERE MA_BDS = '" .$ma. "'";
	$sql2 = "DELETE FROM BANTIN WHERE MABTIN = '" .$ma. "'";
	//-------------------- Thuc Thi Cau Lenh Delete -----------------
	$result = mysqli_query($conn, $sql1);
	$result = mysqli_query($conn, $sql2);

	if($result){
		$affectrow = mysqli_affected_rows();
		mysqli_close($conn);
		header('location:CRUDS.php?MA=EDIT');
	}
?>
Số mẩu tin xóa <?= $affectrow?>