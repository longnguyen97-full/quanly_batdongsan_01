<!-- Tạo bộ khung cho các trang và gọi filter xử lý -->
<?php
  //Set timezone
  date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bất Động Sản KingLand</title>
  <link href="css/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <script src="javascript/jquery-3.5.1.min.js"></script>
  <script src="javascript/javascript.js"></script>
</head>
<body>

<div align="center" width="100%">

  <!-- Menu liên kết mạng xã hội --><?php include("frame/MENU1.html");?>
  
  <!-- Menu điều hướng lĩnh vực --><div id="navbar"><?php include("frame/MENU2.php");?></div>
  
  <!-- Background trang chủ --><div id="dv-content"></div>

  <!-- Nội dung chính, Gọi filter để lọc mã lĩnh vực --><div><br><br><?php include("filter.php");?></div>
  
  <!-- Footer --><?php include("frame/FOOTER.html");?>
  
</div>

<!-- Thanh menu cuộn --><script language="javascript" src="javascript/javascript.js"></script>
  
</body>
</html>