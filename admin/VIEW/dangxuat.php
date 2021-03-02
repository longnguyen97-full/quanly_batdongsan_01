<?php
session_start();

//kiem tra neu co session username thi xoa no di
if(isset($_SESSION['username']) && ($_SESSION['username']!=NULL)) {
	session_unset();
	header('Location: ../index.php');
	$_SESSION['tb_dxuat'] = "Bạn đã đăng xuất thành công!";
}
?>