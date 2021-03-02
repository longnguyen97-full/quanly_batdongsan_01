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
  <link rel="stylesheet" href="css/css/fontawesome.min.css">
  <script src="javascript/jquery-3.5.1.min.js"></script>
</head>
<body>

<div align="center" width="100%">

  <!-- Menu liên kết mạng xã hội --><?php include("frame/MENU1.html");?>
  
  <!-- Menu điều hướng lĩnh vực --><div id="navbar"><?php include("frame/MENU2.php");?></div>
  
  <!-- Background trang chủ --><div id="dv-content"><?php include("frame/CONTENT_IMG_trangchu.html");?></div>

  <!-- Nội dung chính --><div>
  <h2 style="color: #DD940B"> DỰ ÁN PHÂN PHỐI </h2>
  <br/>

  <table border="0" width="1248" cellpadding="0" cellspacing="0">
    <tr>
      <td><img alt="duan01" src="Hinh/DA01.png" width="400">&nbsp;</td>
      <td><img alt="duan02" src="Hinh/DA02.png" width="400">&nbsp;</td>
      <td><img alt="duan03" src="Hinh/DA03.png" width="400">&nbsp;</td>
    </tr>
    <tr><td>&nbsp;</td></tr>
    <tr>
      <td><img alt="duan04" src="Hinh/DA04.png" width="400">&nbsp;</td>
      <td><img alt="duan05" src="Hinh/DA05.png" width="400">&nbsp;</td>
      <td><img alt="duan06" src="Hinh/DA06.png" width="400">&nbsp;</td>
    </tr>
  </table>
  <br/><br/>

  <div class="dv-bg">
    <h2 style="color: white"> VỀ CHÚNG TÔI </h2>
    <table border="0" width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td width="30%" align="center"><img src="Hinh/about-kingland-01.png"/></td>
        <td width="30%" align="center"><img src="Hinh/about-kingland-02.jpg"/></td>
        <td width="30%" align="center"><img src="Hinh/about-kingland-03.jpg"/></td>
      <tr>
      <tr>
        <td>
          <h3 style="color: #DD940B"> Chúng tôi là ai? </h3>
          <p>Với môi trường làm việc đa dạng, khuyến khích nhân viên nâng cao trình độ chuyên môn và đem lại chất lượng vượt trội cho khách hàng.</p>
        </td>
        <td>
          <h3 style="color: #DD940B"> Tầm nhìn của chúng tôi? </h3>
          <p>KingLand mong muốn trở thành nhà cung cấp dịch vụ hàng đầu trong lĩnh vực bất động sản, cung cấp dịch vụ sáng tạo, tối đa hóa lợi ích cho khách hàng.</p>
        </td>
        <td>
          <h3 style="color: #DD940B"> Chúng tôi làm việc thế nào? </h3>
          <p>Đội ngũ KingLand khác biệt nhờ nỗ lực và kinh nghiệm sâu rộng, đây cũng là cơ hội để chúng tôi tận dụng kiến thức đem lại lợi ích cho khách hàng. </p>
        </td>
      <tr>
    </table>
  </div>
  <br/><br/>

   <h2 style="color: #DD940B"> TIN TỨC VÀ SỰ KIỆN </h2>
   <p style="color: gray; margin-left: 20px">Chúng tôi luôn mang đến cho bạn những tin tức mới nhất từ thị trường bất động sản.</p>
   <br/>

  <?php
    include("conndb.php");
    // $sql = "SELECT * FROM BANTIN WHERE MABTIN LIKE 'TT%'";
    $sql = "SELECT * FROM BANTIN WHERE MABTIN LIKE 'TT%' ORDER BY RAND() LIMIT 4";
    $result = mysqli_query($conn, $sql);
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
  </div>
  <br><br>

  <div class="dv-bg">
    <h2 style="color: white"> LĨNH VỰC HOẠT ĐỘNG </h2>
    <p style="color: white; margin-left: 20px">Lĩnh vực hoạt động chuyên nghiệp tích luỹ qua nhiều năm kinh nghiệm.</p>
    <br>

    <table border="0" width="1300">
      <tr>
        <td align="right" width="20" valign="top"><i class="fa fa-building fa-3x" aria-hidden="true"></i></td>
        <td width="370">
          <h3 style="color: #DD940B"> MÔI GIỚI BẤT ĐỘNG SẢN </h3>
          <p>Dịch vụ môi giới và tư vấn bất động sản chuyên nghiệp của chúng tôi luôn thấu hiểu nhu cầu, lựa chọn của Quý Khách hàng có năng lực phù hợp nhất với mỗi loại đất bất động sản.</p>
        </td>
        <td align="right" width="20" valign="top"><i class="fa fa-user fa-3x" aria-hidden="true"></i></td>
        <td width="370">
          <h3 style="color: #DD940B"> QUẢN LÝ BẤT ĐỘNG SẢN </h3>
          <p>Chúng tôi có một đội ngũ chuyên viên tư vấn chuyên nghiệp, tận tâm và giàu kinh nghiệm sẽ giúp Quý Khách quản lý và giao dịch bất động sản phù hợp với mọi nhu cầu của Khách hàng.</p>
        </td>
        <td align="right" width="20" valign="top"><i class="fa fa-home fa-3x" aria-hidden="true"></i></td>
        <td width="370">
          <h3 style="color: #DD940B"> CHO THUÊ CĂN HỘ </h3>
          <p>Với một quy trình tư vấn chuyên nghiệp, chúng tôi sẽ giúp Quý Khách hàng cho thuê và thuê được bất đông sản đáp ứng mọi nhu cầu nhà ở của Quý Khách hàng một cách nhanh nhất.</p>
        </td>
      </tr>
      <tr>
        <td align="right" width="20" valign="top"><i class="fa fa-paper-plane fa-3x" aria-hidden="true"></i></td>
        <td width="370">
          <h3 style="color: #DD940B"> QUẢNG CÁO BẤT ĐỘNG SẢN </h3>
          <p>Chúng tôi đã cho ra đời hệ thống cổng thông tin bất động sản một cách chuyên nghiệp với ưu tiên hàng đầu là quảng bá các sản phẩm bất động sản.</p>
        </td>
        <td align="right" width="20" valign="top"><i class="fa fa-balance-scale fa-3x" aria-hidden="true"></i></td>
        <td width="370">
          <h3 style="color: #DD940B"> THỦ TỤC PHÁP LÝ NHÀ ĐẤT </h3>
          <p>Chuyên tư vấn miễn phí về nhà đất, nhà ở, giấy phép, xây dựng, hoàn công, tranh chấp, lệ phí trước bạ nhà - đất, đáp ứng mọi quy mô bất động sản.</p>
        </td>
        <td align="right" width="20" valign="top"><i class="fa fa-credit-card fa-3x" aria-hidden="true"></i></td>
        <td width="370">
          <h3 style="color: #DD940B"> THẨM ĐỊNH GIÁ </h3>
          <p>Thẩm định giá bất động sản là sự ước tính về giá trị của các quyền sở hữu bất động sản cụ thể bằng hình thức tiền tệ cho một mục đích đã được xác định rõ.</p>
        </td>
      </tr>
    </table>
  </div>
  <br/><br/>

  <hr style="width: 1250px; border: 1px solid lightgray">
  <table width="1248">
    <tr align="center" style="color: #DD940B; font-weight: bold; font-size: 50px">
      <td><div id="shiva"><span class="count">6562</span></div></td>
      <td><div id="shiva"><span class="count">16</span></div></td>
      <td><div id="shiva"><span class="count">156</span></div></td>
      <td><div id="shiva"><span class="count">29</span></div></td>
      <td><div id="shiva"><span class="count">18</span></div></td>
      <td><div id="shiva"><span class="count">1254</span></div></td>
    </tr>
    <tr align="center" style="color: #51646B; font-weight: bold; font-size: 18px">
      <td>KHÁCH HÀNG</td>
      <td>PHÒNG BAN</td>
      <td>NHÂN VIÊN</td>
      <td>GIẢI THƯỞNG</td>
      <td>ĐỐI TÁC</td>
      <td>GIAO DỊCH</td>
    </tr>
  </table>
  <hr style="width: 1200px; border: 1px solid lightgray">
  <br/>

  <div class="dv-bg">
    <h2 style="color: white"> KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI </h2>
    <div>
      <table width="1248">
        <tr>
          <td align="left"> <button class="btnComment_prev" onclick="prev()"> <i class="fas fa-chevron-left"></i> </button> </td>
          <td align="center">
            <div id="divCustomerComment">
              <div id="divAvatar"><img id="imgAvatar" src="" /></div><br>
              <div id="divComment"><p><i> </i></p></div><br>
              <div id="divName"><p style="color: #DD940B; font-size: 18px; margin-right: 50px"> </p></div>
              <div id="divPosition"><p style="color: white; font-size: 18px; margin-right: 50px"> <i><b> </b></i> </p></div><br>
            </div>
          </td>
          <td align="right"> <button class="btnComment_next" onclick="next()"> <i class="fas fa-chevron-right"></i> </button> </td>
        </tr>
      </table>
    </div>
  </div>
  <br/><br/>

  <!-- Footer --><?php include("frame/FOOTER.html");?>
  
</div>

<!-- Thanh menu cuộn --><script language="javascript" src="javascript/javascript.js"></script>

<!-- script-switch-- -->
<script>
  var avatars = [
    "khach-hang-kingland-1.jpg",
    "khach-hang-kingland-2.jpg",
    "khach-hang-kingland-3.jpg",
  ];
	var comments = [
    "Gia đình tôi thường lựa chọn bất động sản làm kênh đầu tư dài hạn, được giới thiệu đến với KingLand, tôi khá bất ngờ bởi sự tận tâm và nhiệt tình của các bạn tư vấn viên nhờ sự hỗ trợ của các bạn, chúng tôi nhanh chóng tìm thấy sản phẩm phù hợp với nhu cầu của mình.",
    "KINGLAND đã giúp tôi và gia đình có một mái nhà thật đầm ấm, một nơi nương tựa vững chắc cho gia đình.",
    "Tôi rất hài lòng với đội ngũ nhân viên KINGLAND không những hoàn thành tốt vai trò mà còn rất tận tâm.",
  ];
  var names = [
    "NGUYỄN MẠNH THẮNG",
    "LÊ HỒNG VÂN",
    "NGUYỄN PHƯƠNG THẢO",
  ]
  var positions = [
    "CEO Real Estate SaigonLand",
    "CEO Real Estate HanoiLand",
    "CEO Real Estate DanangLand",
  ]
	var num = 0;
	var customerComment = $("#divCustomerComment");

	function next(){
		num++;
        if(num >= comments.length) {
            num = 0;
		}
		$("#imgAvatar").attr("src", "hinh/CustomerComment/" + avatars[num]);
		$("#divComment p i").html(comments[num]);
		$("#divName p").html(names[num]);
		$("#divPosition p i b").html(positions[num]);
	}
	function prev(){
		num--;
        if(num < 0) {
            num = comments.length-1;
		}
		$("#imgAvatar").attr("src", "hinh/CustomerComment/" + avatars[num]);
		$("#divComment p i").html(comments[num]);
		$("#divName p").html(names[num]);
		$("#divPosition p i b").html(positions[num]);
	}
</script>
<script>
	var avatars = ["khach-hang-kingland-1.jpg", "khach-hang-kingland-2.jpg", "khach-hang-kingland-3.jpg"];
	var comments = [
    "Gia đình tôi thường lựa chọn bất động sản làm kênh đầu tư dài hạn, được giới thiệu đến với KingLand, tôi khá bất ngờ bởi sự tận tâm và nhiệt tình của các bạn tư vấn viên nhờ sự hỗ trợ của các bạn, chúng tôi nhanh chóng tìm thấy sản phẩm phù hợp với nhu cầu của mình.",
    "KINGLAND đã giúp tôi và gia đình có một mái nhà thật đầm ấm, một nơi nương tựa vững chắc cho gia đình.",
    "Tôi rất hài lòng với đội ngũ nhân viên KINGLAND không những hoàn thành tốt vai trò mà còn rất tận tâm.",
  ];
  var names = ["NGUYỄN MẠNH THẮNG", "LÊ HỒNG VÂN", "NGUYỄN PHƯƠNG THẢO"];

	$(function () {
		var i = 0;
		$("#imgAvatar").attr("src", "hinh/CustomerComment/" + avatars[i]);
    $("#divComment p i").html(comments[i]);
    $("#divName p").html(names[i]);
    $("#divPosition p i b").html(positions[i]);

		setInterval(function () {
			i++;
			$("#imgAvatar").fadeOut("slow", function () {
        $(this).attr("src", "hinh/CustomerComment/" + avatars[i]);
				$(this).fadeIn("slow");
			});
      $("#divComment p i").fadeOut("slow", function () {
        $(this).html(comments[i]);
				$(this).fadeIn("slow");
      });
      $("#divName p").fadeOut("slow", function () {
        $(this).html(names[i]);
				$(this).fadeIn("slow");
      });
      $("#divPosition p i b").fadeOut("slow", function () {
        $(this).html(positions[i]);
				$(this).fadeIn("slow");
      });

			if (i == avatars.length) {
				i = 0;
			}
		}, 3000);
	});
</script>

<script type="text/javascript">
  $('.count').each(function(){
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function(now){
          $(this).text(Math.ceil(now))
       }
    });
  });
</script>

<style type="text/css">
  #imgAvatar {
    border-radius: 50%;
    width: 120px;
    height: 120px;
  }
  #divComment {
    height: 20px;
  }
  .btnComment {
    border-radius: 50%;
    width: 30px;
    height: 30px;
    border: none;
    color: dimgray;
    outline: none;
  }
  .btnComment:hover {
    background-color: white;
  }
</style>
  
</body>
</html>