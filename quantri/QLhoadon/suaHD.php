<?php
$sql="select * from hoadon where idDH='$_GET[mahd]'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="QLhoadon/xulyHD.php?mahd=<?php echo $row['idDH'];?>" method="post" enctype="multipart/form-data">
<table width="47%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa hóa đơn</div></td>
  </tr>
  <tr>
    <td width="22%">Mã HĐ</td>
    <td width="78%"><?php echo $row['idDH'];?></td>
  </tr>
  <tr>
    <td width="22%">Tên người nhận</td>
    <td width="78%"><input type="text" name="ten" value="<?php echo $row['tennguoinhan'];?>"></td>
  </tr>
  <tr>
    <td>SĐT người nhận</td>
    <td><input type="text" name="dt" value="<?php echo $row['sdtnguoinhan'];?>"></td>
  </tr>
  <tr>
    <td>Ngày đặt</td>
    <td><input type="datetime" name="ngaydat" value="<?php echo $row['TimeDatHang'];?>"></td>
  </tr>
  <tr>
    <td>Ngày giao</td>
    <td><input type="date" name="ngaygiao" value="<?php echo $row['TimeNhanHang'];?>"></td>
  </tr>
  <tr>
    <td>Địa chỉ nhận hàng</td>
    <td><input type="text" name="dc" value="<?php echo $row['DiaChiGiaoHang'];?>"></td>
  </tr>
  <tr>
    <td>Tình trạng</td>
    <td><input type="text" name="tt" value="<?php echo $row['TinhTrang'];?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="btsua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>
