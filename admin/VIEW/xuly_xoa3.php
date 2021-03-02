<?php
	$affectrow = 0;
	include('../conndb.php');

	$ma = $_GET['MA'];
	//-------------------- Cau Lenh Delete -----------------------
	$sql = "DELETE FROM LINHVUC WHERE MALV = '" .$ma. "'";
	//-------------------- Thuc Thi Cau Lenh Delete -----------------
	$result = mysqli_query($conn, $sql);

	if($result){
		$affectrow = mysqli_affected_rows();
		mysqli_close($conn);
		header('location:CRUDS.php?MA=EDIT');
	}
?>
Số mẩu tin xóa <?= $affectrow?>