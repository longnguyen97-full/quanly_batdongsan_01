<?php
	include ('../conndb.php');

	$ma = $_POST['txtma'];
	$strten = $_POST['txtten'];
	$dchi = $_POST['txtdchi'];
	$ngsinh = $_POST['txtngsinh'];
	$sdt = $_POST['txtsdt'];
	
	//Cat chuoi
	$ten = explode(" ", $strten);

	//-------------------- Cau Lenh UpDate -----------------------
	$sql1 = "UPDATE NHADAUTU SET HO_NDT='".$ten[0]."', TENLOT_NDT='".$ten[1]."', TEN_NDT='".$ten[2]."', DCHI_NDT='".$dchi."', NGSINH_NDT='".$ngsinh."', SDT_NDT='".$sdt."' WHERE MA_NDT='".$ma."'";
	
	$sql2 = "UPDATE KHACHHANG SET HO_KH='".$ten[0]."', TENLOT_KH='".$ten[1]."', TEN_KH='".$ten[2]."', DCHI_KH='".$dchi."', NGSINH_KH='".$ngsinh."', SDT_KH='".$sdt."' WHERE MA_KH='".$ma."'";

	$sql3 = "UPDATE NHANVIEN SET HO_NV='".$ten[0]."', TENLOT_NV='".$ten[1]."', TEN_NV='".$ten[2]."', DCHI_NV='".$dchi."', NGSINH_NV='".$ngsinh."', SDT_NV='".$sdt."' WHERE MA_NV='".$ma."'";
	
	//-------------------- Thuc Thi Cau Lenh Update -----------------
	$result = mysqli_query($conn, $sql1);
	$result = mysqli_query($conn, $sql2);
	$result = mysqli_query($conn, $sql3);

	if($result){
		header('location:CRUDS.PHP'); //Chuyen Huong Trang Web
	}
?>