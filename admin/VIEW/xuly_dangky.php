<?php
session_start();
//kiem tra co ton tai su kien dang ky khong?
if(!isset($_POST['txtuser']))
{
	//huy trang
	die('');
}

//nhung file connect 
include('../conndb.php');

//lay du lieu tu file sign in
$ma = $_POST['txtma'];
$username = $_POST['txtuser'];
$password = $_POST['txtpw'];
$mail = $_POST['txtmail'];
$sdt = $_POST['txtsdt'];

//luu info vao table
$addaccount = "insert into taikhoan values('".$ma."', '".$username."', '".$password."', '".$mail."', '".$sdt."')";
$result = mysqli_query($conn, $addaccount);

header("Location: ../index.php");
$_SESSION['tb_dky'] = "Đăng ký thành công";
?>