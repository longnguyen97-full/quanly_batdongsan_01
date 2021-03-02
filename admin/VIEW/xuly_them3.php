<?php session_start()?>
<?php
	include ('../conndb.php');

	$ma = $_SESSION['ma'] = $_POST['txtma'];
	$tenlv = $_POST['txttenlv'];
	$domain = $_POST['txtdomain'];
	$ord = $_POST['txtord'];
	$dir = header('location:form_them3.php');

	//----Kiem Tra Trung Khoa --------
	$sqlkey = "SELECT * FROM LINHVUC WHERE MALV = '" .$_SESSION['ma']."'";
	$resultkey = mysqli_query($conn, $sqlkey);

	if(!$ma){
		$_SESSION['tb'] = ' Không được để trống !';
		$dir;
	}
	else {
		if(mysqli_num_rows($resultkey)){
			$_SESSION['tb'] = 'Trùng Khóa ! Không Thêm Được !';
			$dir;
		}
		else{
			$sql = "INSERT INTO LINHVUC(MALV, TENLV, Short_String, Ordinal) VALUES('" .$_SESSION['ma']. "', '" .$tenlv. "', '" .$domain. "', '" .$ord. "')";
			$result = mysqli_query($conn, $sql);

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
	$_SESSION['back'] = '';
?>