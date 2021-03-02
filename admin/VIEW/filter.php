<?php
    error_reporting(0);
    $ma = $_GET["MA"];

    $_SESSION['CRUDS_BDS'] = $_SESSION['CRUDS_BT'] = $_SESSION['CRUDS_NDT'] = $_SESSION['CRUDS_NV'] = $_SESSION['CRUDS_KH'] = "";

    $list1 = array($_SESSION['CRUDS_BDS'], $_SESSION['CRUDS_BT']);
    $list2 = array($_SESSION['CRUDS_NDT'], $_SESSION['CRUDS_NV'], $_SESSION['CRUDS_KH']);

    //Check $ma
    if($ma == "BDS" || $ma == "BT") {
      $_SESSION['CRUDS_GROUP'] = "";
      unset($list2);
      unset($_SESSION['DM']);
      if($ma == "BDS"){
        unset($_SESSION['CRUDS_BT']);
      }
      else{
        unset($_SESSION['CRUDS_BDS']);
      }
      include("danhsach1.php");
    }
    else if($ma == "KH" || $ma == "NV" || $ma == "NDT") {
      unset($_SESSION['CRUDS_GROUP']);
      unset($_SESSION['DM']);
      unset($list1);
      if($ma == "NDT"){
        unset($_SESSION['CRUDS_NV']);
        unset($_SESSION['CRUDS_KH']);
      }
      else if($ma == "NV"){
        unset($_SESSION['CRUDS_NDT']);
        unset($_SESSION['CRUDS_KH']);
      }
      else{
        unset($_SESSION['CRUDS_NDT']);
        unset($_SESSION['CRUDS_NV']);
      }
      include("danhsach2.php");
    }
    else if($ma == "DM") {
      unset($_SESSION['CRUDS_GROUP']);
      unset($list1);
      unset($list2);
      $_SESSION['DM'] = "";

      include("danhsach3.php");
    }
    
?>