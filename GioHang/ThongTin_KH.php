<!DOCTYPE html>
<html>
    <head>
        <title>Ví dụ phân trang trong PHP và MySQL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<form id="form1" name="form1" method="post" action="CapNhat_MuaHang.php">
  <p align="center"><b> THÔNG TIN KHÁCH MUA HÀNG</b> 
  <input type='hidden' name='thong_tin_khach_hang' value='co' >
  <table width="582" border="0" align="center" cellpadding="2" cellspacing="2">
    <tr>
      <td width="141">Họ Tên K.Hàng</td>
      <td width="413"><input type='text' style='width:400px' name='txtten_kh' id="txtten_kh" ></td>
      <td width="18"><font color="#FF0000"><b>*</b></font></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type='text' style='width:400px' name='txtemail_kh' id="txtemail_kh" ></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Địa Chỉ LH</td>
      <td><textarea style='width:400px;' name='txtdiachi_kh' id="txtdiachi_kh" ></textarea></td>
      <td><font color="#FF0000"><b>*</b></font></td>
    </tr>
    <tr>
      <td>Điện Thoại</td>
      <td><input type='text' style='width:400px' name='txtdienthoai_kh' id="txtdienthoai_kh" ></td>
      <td><font color="#FF0000"><b>*</b></font></td>
    </tr>
    <tr>
      <td>Nội Dung</td>
      <td><textarea style='width:400px;height:100px' name='txtnoidung_kh' id="txtnoidung_kh" ></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type='submit' value='Mua hàng' > &nbsp;&nbsp;&nbsp;&nbsp;
      <em> <font color="#0000FF">(Đối Tượng Có Dấu <font color="#FF0000"><b>*</b></font> Phải Nhập Dữ Liệu)</font></em><br>
      <font color="#FF0000"> Đề Nghị Nhập "Họ Tên; Địa Chỉ LH; Điện Thoại" Chính Xác </font> </td>
      <td>&nbsp;</td>
    </tr>
  </table>
  </p>
</form>
</body>
</html>