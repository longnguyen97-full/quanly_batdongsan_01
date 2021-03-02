<?php
  //Kết nối database và truy vấn bảng lĩnh vực
  include("conndb.php");
  $sql = "SELECT * FROM LINHVUC";
  $result = mysqli_query($conn, $sql);

  //Cắt chuỗi URL và kiểm tra, gọi trang tương ứng
  $path = $_SERVER['REQUEST_URI'];
  $paths = explode(".php?", $path); //input: linhvuc.php?gioithieu.php => output: linhvuc và gioithieu.php

  //Duyệt các chuỗi cắt được
  foreach($paths as $short_string) {

    //[Phần tin tức] Nếu chuỗi có đuôi .php và tên chuỗi trùng short_string, thì tạo biến malv và gọi đến view/nav.php
    if(strpos($short_string, '.php') != false) {
      while($rows = mysqli_fetch_array($result)) {
        if($short_string == $rows["Short_String"]) {
          $malv = $rows["MALV"];
          include("view/nav.php");
        }
      }
    }

    else if(strpos($short_string, 'linhvuc') != false) {
    }
    //[Phần tin tức chi tiết] Nếu không có đuôi .php, thì tạo malv_ct và gọi đến view/chitiet.php
    else {
      $malv_ct = $_GET["MACT"];
      include("view/chitiet.php");
    }
  }
?>