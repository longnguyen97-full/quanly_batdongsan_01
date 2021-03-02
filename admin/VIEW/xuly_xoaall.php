<?php
	$affectrow = 0;
	include('../conndb.php');

	if(isset($_POST['delete'])){
		$chkarr = $_POST['checkbox'];
		foreach ($chkarr as $id){
			mysqli_query($conn, "DELETE FROM BATDONGSAN WHERE MA_BDS = '".$id."'");
			mysqli_query($conn, "DELETE FROM BANTIN WHERE MABTIN = '".$id."'");
			mysqli_query($conn, "DELETE FROM NHADAUTU WHERE MA_NDT = '".$id."'");
			mysqli_query($conn, "DELETE FROM KHACHHANG WHERE MA_KH = '".$id."'");
			mysqli_query($conn, "DELETE FROM NHANVIEN WHERE MA_NV = '".$id."'");
		}
	}

	if($chkarr){
		$affectrow = mysqli_affected_rows();
		mysqli_close($conn);
		header('location:CRUDS.php?MA=EDIT');
	}
?>
Số mẩu tin xóa <?= $affectrow?>