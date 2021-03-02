<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script type="text/javascript">
	window.onload = function() {
		//var button = document.getElementById('btn_cruds').value;
		var button = document.getElementsByTagName('button');

		for(var i = 0; i < button.length; i++){
			button[i].addEventListener("click", function display(){
				var parent = this;

				switch(parent.value){
					case '1':
					window.location.href = "CRUDS.php?MA=EDIT";
					break;

					case '2': 
					window.location.href = "CRUDS.php?MA=ADD";
					break;

					case '3': 
					window.location.href = "CRUDS.php?MA=SEARCH";
					break;

					case '4': 
					window.location.href = "CRUDS.php?MA=LIST";
					break;

					default:
					window.location.href = "dangxuat.php";
					break;
				}
			});
		}
	}
</script>
<style type="text/css">
	#btn_cruds:active{
		background-color: darkgray;
		outline: none;
	}
</style>
<body>

<table width="1280" border=0 align="center" cellpadding="0" cellspacing="0">
	<tr>
		<td class="table-row1--column1" width="210">
		<img style="margin: 5px 0px 0px 20px;" src="../Hinh/logo.png" height="40">
		</td>
		<td class="table-row1--column2 3inherit" align="right">
			<!-- Kết hợp Mã ở linhvuc và Mã header để: Hiệu chỉnh/Thêm/Tìm kiếm các Lĩnh Vực tương ứng -->
			<span id="span-btn">
				<?php
					if(!isset($_SESSION['khoa'])){
						echo "<button id='btn_cruds' value='1'> Hiệu Chỉnh </button>&nbsp;";
						echo "<button id='btn_cruds' value='2'> Thêm </button>&nbsp;";
					}
				?>
				<!-- <button id="btn_cruds" value="1"> Hiệu Chỉnh </button>&nbsp;
				<button id="btn_cruds" value="2"> &nbsp;&nbsp;&nbsp;&nbsp;Thêm&nbsp;&nbsp;&nbsp;&nbsp; </button>&nbsp;-->
				<button id="btn_cruds" value="3"> &nbsp;Tìm Kiếm </button>&nbsp;
				<button id="btn_cruds" value="4"> &nbsp;Danh Sách </button>&nbsp;
				<button id="btn_cruds">  Đăng Xuất  </button>&nbsp;&nbsp;&nbsp; 
			</span>
		</td>
	</tr>
</table>

</body>
</html>