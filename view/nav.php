<?php
    //Kiểm mã và chuyển trang
    //Các mã cố định
    if($malv == "GT" || $malv == "DA" || $malv == "LH" || $malv == "BDS"){
      if($malv == "GT") {
        include('gioithieu.php');
      }
      if($malv == "DA") {
        include('duan.php');
      }
      if($malv == "LH") {
        include('lienhe.php');
      }
      if($malv == "BDS") {
        include('batdongsan.php');
      }
    }
    else if($malv == "GH") {
      include('GioHang/giohang.php');
    }
    //Các mã không cố định
    else{
      include('chung.php');
    }
?>