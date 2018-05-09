<form action="QLsanpham/xulySP.php" method="post" enctype="multipart/form-data">
<table width="50%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm sản phẩm</div></td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input name="tensp" type="text" size="50"></td>
  </tr>
  <tr>
    <td>SL tồn</td>
    <td><input name="slton" type="text" size="50"></td>
  </tr>
  <tr>
    <td>Thương hiệu</td>
    <td><input name="thuonghieu" type="text" size="50"></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><input name="hinh" type="file" size="50"></td>
  </tr>
  <tr>
    <td>Loại quần áo</td>
    <td>
      <select name="maloai">
        <option>-Chọn loại quần áo-</option>
        <?php
        //include('../../lib/connect.php');
        $sql="select * from loaisanpham ";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
        <option value="<?php echo $row['maloai'];?>"><?php echo $row['tenloai'];?></option>
        <?php } ?> 
      </select>
    </td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input name="gia" type="text" size="50"></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="mota" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="btthem" value="Thêm">
      </div>
    </td>
  </tr>
</table>
</form>