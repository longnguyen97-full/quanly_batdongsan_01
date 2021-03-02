<?php session_start()?>
<?php
	include ('../conndb.php');

	$_SESSION['ma'] = $_POST['txtma'];
	$ma = $_POST['txtma'];
	$strten = $_POST['txtten'];
	$dchi = $_POST['txtdchi'];
	$ngsinh = $_POST['txtngsinh'];
	$sdt = $_POST['txtsdt'];
	
	$ten = explode(" ", $strten);
	$dir = header('location:form_them2.PHP');

	//----Kiem Tra Trung Khoa --------
	if(!isset($_SESSION['CRUDS_NDT'])){
		if(!isset($_SESSION['CRUDS_KH'])){
			$matudongtang = "NV";
			$sqlkey3 = "SELECT * FROM NHANVIEN WHERE MA_NV = '" .$_SESSION['ma']."'";
			$resultkey = mysqli_query($conn, $sqlkey3);
			$flag = 3;
		}
		else{
			$matudongtang = "KH";
			$sqlkey2 = "SELECT * FROM KHACHHANG WHERE MA_KH = '" .$_SESSION['ma']."'";
			$resultkey = mysqli_query($conn, $sqlkey2);
			$flag = 2;
		}
	}
	else{
		$matudongtang = "NDT";
		$sqlkey1 = "SELECT * FROM NHADAUTU WHERE MA_NDT = '" .$_SESSION['ma']."'";
		$resultkey = mysqli_query($conn, $sqlkey1);
		$flag = 1;
	}

	//
	if(!$ma){
		$_SESSION['tb'] = ' Không được để trống !';
		$dir;
	}
	else{
		if(!is_numeric($ma)){
			$_SESSION['tb'] = ' Bạn phải nhập số !';
			$dir;
		}
		else{
			if(mysqli_num_rows($resultkey)){
				$_SESSION['tb'] = 'Trùng Khóa ! Không Thêm Được !';
				$dir;
			}
			else{
				$_SESSION['ma'] = $matudongtang . $_SESSION['ma'];
				if($flag == 1){
					$sql1 = "insert into NHADAUTU(MA_NDT, HO_NDT, TENLOT_NDT, TEN_NDT, DCHI_NDT, NGSINH_NDT, SDT_NDT) values('" .$_SESSION['ma']. "', '" .$ten[0]. "', '" .$ten[1]. "', '" .$ten[2]. "', '" .$dchi. "', '" .$ngsinh. "', '" .$sdt. "')";
					$result = mysqli_query($conn, $sql1);
				}
				else if($flag == 2){
					$sql2 = "insert into KHACHHANG(MA_KH, HO_KH, TENLOT_KH, TEN_KH, DCHI_KH, NGSINH_KH, SDT_KH) values('" .$_SESSION['ma']. "', '" .$ten[0]. "', '" .$ten[1]. "', '" .$ten[2]. "', '" .$dchi. "', '" .$ngsinh. "', '" .$sdt. "')";
					$result = mysqli_query($conn, $sql2);
				}
				else{
					$sql3 = "insert into NHANVIEN(MA_NV, HO_NV, TENLOT_NV, TEN_NV, DCHI_NV, NGSINH_NV, SDT_NV) values('" .$_SESSION['ma']. "', '" .$ten[0]. "', '" .$ten[1]. "', '" .$ten[2]. "', '" .$dchi. "', '" .$ngsinh. "', '" .$sdt. "')";
					$result = mysqli_query($conn, $sql3);
				}
				if($result){
					$_SESSION['tb'] = "Thêm Thành Công  !";
					$dir;
				}
				else{
					$_SESSION['tb'] = "Thêm Không Thành Công  !";
					$dir;
				}
			}
		}
	}
	$_SESSION['back'] = '';
?>