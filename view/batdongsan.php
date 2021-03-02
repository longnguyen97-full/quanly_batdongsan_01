<?php include("frame/CONTENT_IMG_others.php"); include('simple_html_dom.php');?>
<?php 
	echo "<div class='dv-title'> <h1> BẤT ĐỘNG SẢN </h1> </div>";
	echo "<h2 style='color: #DD940B'>BẢN TIN BẤT ĐỘNG SẢN</h2>";

	$html = file_get_html('https://vnexpress.net/kinh-doanh/bat-dong-san');

	echo "<table align='center'>";
		echo "<tr>";
			echo "<td>";
			foreach($html->find('.title-news a') as $title) {
				echo $title ."<br><br>";
			}
			echo "</td>";
			// echo "<td align='right'>";
			// foreach($html->find('.thumb-art img') as $image) {
			// 	echo "<div width='300px' height='180px' style='background: $image >' </div> a <br><br> </div>";	
			// }
			// echo "</td>";
		echo "</tr>";
	echo "</table>";
?>