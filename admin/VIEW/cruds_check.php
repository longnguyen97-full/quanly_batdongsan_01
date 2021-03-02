<?php
    //Nếu tồn tại Mã CRUDS_GROUP(BDS || BT). Gọi hiệu chỉnh/thêm/tìm kiếm 1
    if(isset($_SESSION['CRUDS_GROUP'])){
      if($ma == "EDIT"){
        include('danhsach_hieuchinh1.php');
      }
      if($ma == "ADD"){
        include('form_them1.php');
      }
      if($ma == "SEARCH"){
        include('form_timkiem1.php');
      }
      if($ma == "LIST"){
        include('danhsachsanpham.php');
      }
    }
    //Nếu tồn tại Mã Danh Mục. Gọi 3
    else if(isset($_SESSION['DM'])) {
      if($ma == "EDIT"){
        include('danhsach_hieuchinh3.php');
      }
      if($ma == "ADD"){
        include('form_them3.php');
      }
      if($ma == "SEARCH"){
        include('form_timkiem3.php');
      }
      if($ma == "LIST"){
        include('danhsachsanpham.php');
      }
    }
    //Ngược lại. Gọi 2
    else{
      if($ma == "EDIT"){
        include('danhsach_hieuchinh2.php');
      }
      if($ma == "ADD"){
        include('form_them2.php');
      }
      if($ma == "SEARCH"){
        include('form_timkiem2.php');
      }
      if($ma == "LIST"){
        include('danhsachsanpham.php');
      }
    }

?>