<?php
	//Kết nối database 
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_set_charset($conn, 'utf8');
	$db = mysqli_select_db($conn, "ql_batdongsan");
?>