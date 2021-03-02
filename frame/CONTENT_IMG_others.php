<!DOCTYPE html>
<html>
<head>
</head>

<style>	
	.dv-box {
		position: absolute;
		z-index: -1;		
		top: 0px;
		right: 0px;
		left: 0px;
		bottom: 0px;
		margin-top: 60px;
	}
	
	#tb-empty button {
		font-size: 25px;
		border-radius: 50%;
		border: none;
		background: none;
		color: #E1E1E1;
		padding: 7px 14px 7px 14px;
		outline: none;
		margin-bottom: 120px;
	}
	
	#tb-empty button:hover {
		background-color: whitesmoke;
	}

</style>
	
<body>
	
	<?php
		include("conndb.php");
		$sql_bkg = "SELECT * FROM LINHVUC";
		$result_bkg = mysqli_query($conn, $sql);
		
		//tenlinhvuc
		$tenlv = $rows["TENLV"];

		if(isset($malv)){
			while($rows = mysqli_fetch_array($result_bkg)){
				if($malv == $rows["MALV"]) {
					$background = $rows["Hinh"];
				}
			}
		}
		else{
			$arr = preg_split('/(?<=[A-Z])(?=[0-9]+)/i', $malv_ct);
			foreach($arr as $mact) {
				while($rows = mysqli_fetch_array($result_bkg)){
					if($mact == $rows["MALV"]) {
						$background = $rows["Hinh"];
					}
				}
			}
		}
	?>

	<div class="dv-box"><img id="slider" src="<?=$background?>" width="1350" height="620"/></div>
	<table id="tb-empty" width="1350" height="620"></table>

</body>
</html>