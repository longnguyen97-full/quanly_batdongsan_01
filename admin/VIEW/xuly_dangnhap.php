<?php
	session_start();

	//ket noi db
	include('../conndb.php');
	
	//lay thong tin tai khoan tu form dang nhap
	$username = $_POST['txtuser'];
	$password = $_POST['txtpw'];
	
	//kiem tra tendangnhap co ton tai
	$sql = "SELECT USER_TK, PASS_TK FROM TAIKHOAN WHERE USER_TK='".$username."' AND PASS_TK='".$password."'";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_num_rows($query);

	if(!$username && !$password){
		header('Location: ../index.php');
		$_SESSION['tb_login'] = "Tên đăng nhập và mật khẩu không được rỗng!";
	}
	else if(!$username){
		header('Location: ../index.php');
		$_SESSION['tb_login'] = "Tên đăng nhập không được rỗng!";
	}
	else if(!$password){
		header('Location: ../index.php');
		$_SESSION['tb_login'] = "Mật khẩu không được rỗng!";
	}
	else if(!$result){
		header('Location: ../index.php');
		$_SESSION['tb_login'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
	}
	else{
		//luu thong tin dang nhap
		if($username == "admin"){
			$_SESSION['username'] = $username;
		}else{
			$_SESSION['username'] = $username;
			$_SESSION['khoa'] = "";
		}
		//echo "Xin chao " .$username. "&nbsp;Ban da dang nhap thanh cong";
		//die();
		header('Location: linhvuc.php');
	}

?>