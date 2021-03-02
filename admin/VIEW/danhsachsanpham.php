<?php
	include ('../conndb.php');
	
	if(isset($_SESSION['khoa'])){
		$username = $_SESSION['username'];
		$sql = "SELECT USER_TK FROM TAIKHOAN WHERE USER_TK = '".$username."'";
		echo "Bạn chỉ có quyền chỉnh sửa sản phẩm được cấp: ";
		
	 }else{
		$username = $_SESSION['username'];
		$sql = "SELECT USER_TK FROM TAIKHOAN WHERE USER_TK = '".$username."'";
		echo "Bạn đang là quản lý: ";
	}
	$result = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_array($result)){
		echo "<strong>".$rows['USER_TK']."</strong>";
		$iden = $rows['USER_TK'];
	}
?>
<?php
	if($iden == "admin"){
		$sql_sp = "SELECT TEN_BDS FROM BATDONGSAN";
	}else{
		$sql_sp = "SELECT TEN_BDS FROM BATDONGSAN WHERE USER_TK = '".$username."'";
	}
	$result_sp = mysqli_query($conn, $sql_sp);

	echo "<br><br>";
	echo "<table border='1' align='center' width='1230' cellpadding='10' cellspacing='2'>";
		echo "<tr>";
			echo "<td>"; echo "<h4>Tên Bất Động Sản</h4>"; echo "</td>";
			echo "<td>"; echo "<h4>Nhân Viên Chịu Trách Nhiệm</h4>"; echo "</td>";
		echo "</tr>";
	while ($rows_sp = mysqli_fetch_array($result_sp)){
		echo "<tr>";
			echo "<td>"; echo $rows_sp['TEN_BDS']; echo "</td>";
			echo "<td>"; echo $username; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
?>