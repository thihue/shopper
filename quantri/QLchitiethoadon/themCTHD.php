<form action="QLchitiethoadon/xulyCTHD.php" method="post" enctype="multipart/form-data">
<table width="88%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm chi tiết hóa đơn</div></td>
  </tr>
  <tr>
    <td width="37%">Mã HĐ</td>
    <td width="63%">
      <select name="idDH" id="idDH">
        <option>-Chọn Mã HĐ-</option>
        <?php
        //include('../../lib/connect.php');
        $sql="select * from hoadon ";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
        <option value="<?php echo $row['idDH'];?>"><?php echo $row['idDH'];?></option>
        <?php } ?> 
      </select>
    </td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><select name="masp">
      <option>-Chọn Mã SP-</option>
       <?php
        //include('../../lib/connect.php');
        $sql="select * from sanpham";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
        <option value="<?php echo $row['masp'];?>"><?php echo $row['masp'];?></option>
        <?php } ?> 
    </select></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td>
    <input type="text" name="sl"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="btthem" value="Thêm">
    </div></td>
  </tr>
</table>
</form>
