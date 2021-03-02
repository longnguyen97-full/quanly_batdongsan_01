<?php session_start()?>
<?php
	include ('../conndb.php');

	$_SESSION['ma'] = $_POST['txtma'];
	$ma = $_POST['txtma'];
	$ten = $_POST['txtten'];
	$vt_nd = $_POST['txtvt_nd'];
	$gt_nd = $_POST['txtgt_nd'];
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$dir = header('location:form_them1.PHP');

	//
	if(strlen($vt_nd) > 200 ){
		$stringCut = substr($vt_nd, 0, 180);
		$endPoint = strrpos($vt_nd, ' ');

		$vt_nd = $endPoint? substr($vt_nd, 0, $endPoint) : substr($stringCut, 0);
		$vt_nd = $stringCut. '... ';
	}

	//$_POST['sltbtin']
	//----Kiem Tra Trung Khoa --------
	if(!isset($_SESSION['CRUDS_BDS'])){
		$matudongtang = $_POST['btin'];
		$sqlkey2 = "SELECT * FROM BANTIN WHERE MABTIN = '" .$_SESSION['ma']."'";
		$resultkey = mysqli_query($conn, $sqlkey2);
		$flag = 2;
	}
	else{
		$matudongtang = "BDS";
		$sqlkey1 = "SELECT * FROM BATDONGSAN WHERE MA_BDS = '" .$_SESSION['ma']."'";
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
					$sql1 = "insert into BATDONGSAN(MA_BDS, TEN_BDS, VITRI_BDS, GIOITHIEU, HINH) values('" .$_SESSION['ma']. "', '" .$ten. "', '" .$vt_nd. "', '" .$gt_nd. "', '{$image}')";
					$result = mysqli_query($conn, $sql1);
				}
				else{
					$sql2 = "insert into BANTIN(MABTIN, TENBTIN, NOIDUNG_TT, NOIDUNG_CT, HINH) values('" .$_SESSION['ma']. "', '" .$ten. "', '" .$vt_nd. "', '" .$gt_nd. "', '{$image}')";
					$result = mysqli_query($conn, $sql2);
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