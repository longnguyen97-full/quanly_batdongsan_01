<?php 
	session_start();

//kiem tra nguoi dung da dang nhap chua, chua thi tao thong bao
if(!isset($_SESSION['username'])){
	header('Location: index.php');
	$_SESSION['tb_qly'] = "Đăng nhập để tiếp tục";
}
?>

<?php include("../FRAME/layout.php")?>