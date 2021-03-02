<?php
	//Kết nối database. Truy vấn đến Lĩnh Vực
	include("conndb.php");
	$sql = "SELECT * FROM LINHVUC ORDER BY ORDINAL";
	$result = mysqli_query($conn, $sql);
?>
<style>
	#tb-menu2 {
		background: linear-gradient(120deg, #bfbfbf 0%, #404040 55%, #333 90%);
		width: 100%;
	}

	#tb-menu2 .a {
		float: left;
		text-decoration: none;
		color: #f2f2f2;
		font-size: 14px;
		font-weight: 550;
	}
	.aa{
		color: black;
	}
	.aa:hover{
		color: #DD940B;
	}
	.dv-area2 span{
		float: left;
		text-decoration: none;
		color: #f2f2f2;
		font-size: 14px;
		font-weight: 550;
	}
	
	.dv-area1 {
		margin-left: 30px;
	}
	.dv-area2 {
		position: relative;
		display: inline-block;
		padding: 15px;
	}
	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		padding: 12px 16px;
		z-index: 1;
	}

	.dv-area2:hover .dropdown-content {
		display: block;
		background: linear-gradient(120deg, lightgray 4%, gray 58%, dimgray 75%);
		border-radius: 5px;
	}
	.main-content {
		margin: -20px 0px -20px 20px;
	}
	h4{line-height: 5px;}
	.div-p{line-height: 18px;}
</style>
<?php
	//------------------------------------
	echo "<table id='tb-menu2'>";
	while($rows = mysqli_fetch_array($result)) {
		
		echo "<tr>";
			echo "<td>";echo "&nbsp;"; echo "</td>";
			echo "<td><div class='dv-area1'><a href='index.php'><img src='hinh/LOGO.png' height='30'></div></td>";
			//Đếm tổng số record lĩnh vực và chạy vòng lặp
			$n = count($rows);
			//Chạy vòng lặp và hiển thị tên các lĩnh vực
			for($i = 0; $i <= $n; $i++){
				//short_string = gioithieu.php, duan.php,...

				if (isset($rows["Short_String"])) {
					$sstring = $rows['Short_String'];
				}
				
				// $ma1 = "BatDongSan.php"; $ma2 = "GioHang.php";
				
				// echo "<td><div class='dv-area2'>";
					//Nếu record có short_string không phải batdongsan hoặc giohang thì điều hướng đến linhvuc.php?short_string
					if($rows != false) {
						// echo "<a href='linhvuc.php?{$rows['Short_String']}'> {$rows['TENLV']} </a>";
						// if(($sstring != $ma1) && ($sstring != $ma2)) {
						
						// }
						//Ngươc lại đến giohang/short_string
						// else {
						// 	echo "<a href='GioHang/{$rows['Short_String']}'> {$rows['TENLV']} </a>";
						// }

						if($sstring == "duan.php"){
							echo"<td>";
							echo "<div class='dv-area2'>"; //Parent class
								echo "<span>{$rows['TENLV']}</span>";
								echo "<div class='dropdown-content'>";
									echo "<div class='main-content'>";
										echo "<h4><a class='aa' href='linhvuc.php?duan.php'>Tất Cả</a></h4>";
								// echo "<a href='linhvuc.php?{$rows['Short_String']}'> {$rows['TENLV']} </a>";
										echo "<h4><a class='aa' href='duan_chung.php?Ma=HCM'>TP. Hồ Chí Minh</a></h4>";
											echo "<div class='div-p'>";
											echo "<p>Quận 1</p>";
											echo "<p>Quận 4</p>";
											echo "<p>Quận 7</p>";
											echo "</div>";
										echo "<h4><a class='aa' href='duan_chung.php?Ma=DN'>TP. Đà Nẵng</a></h4>";
											echo "<div class='div-p'>";
											echo "<p>Hải Châu</p>";
											echo "<p>Cẩm Lệ</p>";
											echo "<p>Sơn Trà</p>";
											echo "</div>";
										echo "<h4><a class='aa' href='duan_chung.php?Ma=HN'>TP. Hà Nội</a></h4>";
											echo "<div class='div-p'>";
											echo "<p>Ba Đình</p>";
											echo "<p>Nam Từ Liêm</p>";
											echo "<p>Hoàn Kiếm</p>";
											echo "</div>";
									echo "</div>";
								echo "<div/>";

						// 		echo"<ul style='list-style-type: none; padding-bottom: 15px'>";
						// 			echo"<li>";
						// 				echo "<a href='linhvuc.php?{$rows['Short_String']}'> {$rows['TENLV']} </a>";
						// 				echo "<div >";
						// 					echo "<p>Hello</p>";
						// 				echo "</div>";
						// 			echo"</li>";
						// 		echo"</ul>";
							echo "</div>";
							echo"</td>";
						}else{
							echo"<td>";
							echo "<div class='dv-area2'>"; //Parent class
								echo "<a class='a' href='linhvuc.php?{$rows['Short_String']}'> {$rows['TENLV']} </a>";

						// 		echo"<ul style='list-style-type: none; padding-bottom: 15px'>";
						// 			echo"<li>";
						// 				echo "<a href='linhvuc.php?{$rows['Short_String']}'> {$rows['TENLV']} </a>";
						// 				echo "<div >";
						// 					echo "<p>Hello</p>";
						// 				echo "</div>";
						// 			echo"</li>";
						// 		echo"</ul>";
							echo "</div>";
						echo"</td>";
						}

					}
					// else{
					// 	echo "&nbsp;";
					// }
				// echo "</div></td>";
				if($i != $n){
					$rows = mysqli_fetch_array($result);
				}
			}//KT for
			echo "<td>";echo "&nbsp;"; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";
?>