<?php
echo "<button><a href='index.php'>Thoát</a></button>";
	//-------------------------Goi Tap Tin KNCSDL -------------------------
	//Kết nối database 
	include ("conndb.php");
	
	//---------------------------------------------------------------------
	//echo '<br>ID :  ' .$_GET['id'];
	if((isset($_GET['id'])) && ($_SESSION['trang_chi_tiet_gio_hang'] == 'co'))
    //Nếu ID Tồn Tại Và Trang ChiTietSP1.PHP Đã Truy Cập
    {
		$_SESSION['trang_chi_tiet_gio_hang']="huy_bo";

		//$_SESSION['id_them_vao_gio']  : Mảng Lưu ID S.Phẩm
		//$_SESSION['sl_them_vao_gio']	: Mảng Lưu SoLg S.Phẩm GIỎ Hàng Theo Từng ID
				
		if(isset($_SESSION['id_them_vao_gio']))		
		//$_SESSION['id_them_vao_gio'] :  Đã Tồn Tại
        {
            $so = count($_SESSION['id_them_vao_gio']);
            $trung_lap = "khong";
            for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
            {
                if($_SESSION['id_them_vao_gio'][$i] == $_GET['id'])
                {
                    $trung_lap = "co";
                    $vi_tri_trung_lap = $i;
                    break;
                }
            }
            if($trung_lap == "khong")
            {
                $_SESSION['id_them_vao_gio'][$so] = $_GET['id'];
                $_SESSION['sl_them_vao_gio'][$so] = $_GET['so_luong'];
            }
            if($trung_lap == "co")
            {
                $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] = $_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap] + $_GET['so_luong'];
				//Cap Nhat Lại So Lg
            }
        }
        else	//$_SESSION['id_them_vao_gio'] :  Chưa Tồn Tại
        {
            $_SESSION['id_them_vao_gio'][0] = $_GET['id'];
            $_SESSION['sl_them_vao_gio'][0] = $_GET['so_luong'];
        }
    }
	//============================================================
	echo "<p align='center'>";
	$gio_hang = "khong";
	if(isset($_SESSION['id_them_vao_gio']))
	{
    	$so_luong=0;
    	for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
    	{
        	$so_luong = $so_luong + $_SESSION['sl_them_vao_gio'][$i];
    	}
    	if($so_luong != 0)
    	{
        	$gio_hang = "co";
    	}
	}

	echo "<table align='center' border=0 width='800'>";
	echo "<tr>";
		echo "<td colspan=2 align='center'> <font color='#FF0000' size='+2'> <b> GIỎ HÀNG </b></font><br>&nbsp; </td>";
	echo "</tr><tr>";
		echo "<td> <b> <a href='BatDongSan.php'> TIẾP TỤC MUA </a> </b></td>";
		echo "<td align='right' > <b><a href='HuyGioHang.PHP'>HỦY GIỎ HÀNG </a> </b></td>";
		
	echo "</tr>";	
	echo "</table>";		

	if($gio_hang == "khong")
	{
    	echo "<font color='#FF0000' size='+2'> <b> Không có sản phẩm trong giỏ hàng</b></font>";
	}
	else
	{
		//---------------------------Bo Sung -------------------------------
		echo "<form method='post' action='CapNhat_GioHang.PHP' >";
        //echo "<input type='hidden' name='cap_nhat_gio_hang' value='co' > ";
		//------------------------------------------------------------------
		echo "<table align='center' border=1>";
        echo "<tr align='center'>";
            echo "<td width='50px' >STT</td>";
			echo "<td width='100px' >Mã</td>";
			echo "<td width='250px' >Tên</td>";
            echo "<td width='100px' >Số lượng</td>";
            echo "<td width='120px' >Đơn giá</td>";
            echo "<td width='170px' >Thành tiền</td>";
        echo "</tr>";
        $tong_cong = 0;
        for($i = 0; $i < count($_SESSION['id_them_vao_gio']); $i++)
        {
			$sql = "SELECT * FROM BATDONGSAN WHERE ID = '".$_SESSION['id_them_vao_gio'][$i]."'";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_fetch_array($result);
			
            $tien = $rows['gia_ban'] * $_SESSION['sl_them_vao_gio'][$i];
            $tong_cong = $tong_cong + $tien;
			
			$_SESSION['tong_tien'] = $tong_cong;	//Luu Tong So Tien
			//---------------------------Bo Sung -------------------------------
			$name_id="id_".$i;
			$name_sl="sl_".$i;
			//------------------------------------------------------------------		

            if($_SESSION['sl_them_vao_gio'][$i] != 0)
            {
            echo "<tr>";
				echo "<td align='center'>".$i."</td>";
                echo "<td align='center'>&nbsp;&nbsp;".$rows['id']."</td>";
				echo "<td>&nbsp;&nbsp;".$rows['TEN_BDS']."</td>";
				//--------------------------- Hieu Chinh ---------------------------
				//echo "<td>".$_SESSION['sl_them_vao_gio'][$i]."</td>";		//Lệnh Cũ
				echo "<td align='center'>";
				echo "<input type='hidden' name='".$name_id."' value='".$_SESSION['id_them_vao_gio'][$i]."' >";
				echo "<input type='text' style='width:50px' name='".$name_sl."' value='". $_SESSION['sl_them_vao_gio'][$i]."' > ";
				echo "</td>";
				//------------------------------------------------------------------					
				echo "<td align='right'>".$rows['gia_ban']."&nbsp;&nbsp;</td>";
                echo "<td align='right'>".$tien."&nbsp;&nbsp;</td>";
            echo "</tr>";
            }
        }	//Kết Thúc For
		echo "<tr>";
			echo "<td>&nbsp;</td>";
			echo "<td>&nbsp;</td>";
			echo "<td>&nbsp;</td>";
			echo "<td align='center'><input type='submit' value='Cập nhật' > </td>";
			echo "<td>&nbsp;</td>";
			echo "<td>&nbsp;</td>";
		echo "</tr>";  
    echo "</table>";
	echo "</form>";
    echo "<p align='center'>";
    echo "Tổng giá trị đơn hàng là : ".$tong_cong." VNĐ";
	echo "</p>";
	}
	//-------------- Chèn Trang Thông Tin Người Mua Hàng ----------------
	include("ThongTin_KH.php");
	echo "</p>";
	//-------------- Vung Gio Hang --------------------------------------
	/*echo "<p align='center'>";
	include("VungGioHang2.php");
	echo "</p>";
	*/
	
?>
