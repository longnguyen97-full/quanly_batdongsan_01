<?php
	session_start();

	//ket noi db
	include('../conndb.php');
	
	//lay data tu form dang nhap
	$username = $_POST['txtuser'];
	$password = $_POST['txtpw'];
	$password_new = $_POST['txtpw_new'];
	
	$sql_pw = "UPDATE TAIKHOAN SET PASS_TK='".$password_new."' WHERE USER_TK='".$username."'";
	$result = mysqli_query($conn, $sql_pw);
	
	$_SESSION['tb_change_pw'] = "";
	header("Location: ../index.php");	
?>