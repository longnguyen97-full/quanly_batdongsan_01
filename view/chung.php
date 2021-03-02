<?php include("frame/CONTENT_IMG_others.php");?>
<?php
    if(isset($malv)) {
		$sql = "SELECT * FROM BANTIN WHERE MABTIN LIKE '$malv%'";
    }
	$result = mysqli_query($conn, $sql);
	//------------------------------------
?>
	<div class="dv-title"><h1> <?=$tenlv;?> </h1></div>
	<h2 style="color: #DD940B"> <?=$tenlv;?> </h2>

<?php
	echo "<table border=0 width=1248 cellpadding=0 cellspacing=0>";
	while($rows = mysqli_fetch_array($result)) {
		echo "<tr>";
			for($i = 1; $i <= 2; $i++) {
				echo "<td width='620'>";
						if($rows != false) {
							echo "<div class='dv-tb'>";
								echo('<img src="data:image/png; base64, '.base64_encode($rows['HINH']).'" width="200" height="133" /> <br /> ');
								echo "<a href='linhvuc.php?MACT={$rows['MABTIN']}'><strong>{$rows['TENBTIN']}</strong></a>";
								echo "<br /><br />";
								echo "<span style='color: #575757'>{$rows['NOIDUNG_TT']}</span>";
							echo "</div>";
						}
				echo "</td>";
				if($i != 2) {
					$rows = mysqli_fetch_array($result);
				}
			}//KT for
		echo "</tr>";
	}
	echo "</table>";
?>