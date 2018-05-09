<?php
$sql="select * from sanpham where masp='$_GET[masp]'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="QLsanpham/xulySP.php?masp=<?php echo $row['masp'];?>" method="post" enctype="multipart/form-data">
<table width="50%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa sản phẩm</div></td>
  </tr>
  <tr>
    <td width="14%">Mã SP</td>
    <td width="86%">    
      <?php echo $row['masp'];?>
	</td>
  </tr>
  <tr>
    <td>Tên sản phẩm</td>
    <td><input name="tensp" type="text" size="50" value="<?php echo $row['tensp'];?>"></td>
  </tr>
  <tr>
    <td>SL tồn</td>
    <td><input name="slton" type="text" size="50" value="<?php echo $row['soluongton'];?>"></td>
  </tr>
  <tr>
    <td>Thương hiệu</td>
    <td><input name="thuonghieu" type="text" size="50"  value="<?php echo $row['nhasx'];?>"/></td>
  </tr>
  <tr>
    <td>Hình</td>
    <td><input name="hinh" type="file" size="50"><img src="../pp/<?php echo $row['hinh'];?>"/></td>
  </tr>
  <tr>
    <td>Loại quần áo</td>
    <td>
      <select name="maloai" >
        <option>-Chọn loại quần áo-</option>
        <?php
        //include('../../lib/connect.php');
        $sql="select * from loaisanpham ";
        $stmt2=$pdo->prepare($sql);
        $stmt2->execute();
        while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
		if($row['maloai']==$row2['maloai']){
		?>
        <option value="<?php echo $row2['maloai'];?>" selected="selected"><?php echo $row2['tenloai'];?></option>
         <?php } else{?> 
         <option value="<?php echo $row2['maloai'];?>"><?php echo $row2['tenloai'];?></option>   
        <?php } }?>   
      </select>
    </td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input name="gia" type="text" size="50" value="<?php echo $row['dongia'];?>" /></td>
  </tr>
  <tr>
    <td>Mô tả</td>
    <td><textarea name="mota" cols="45" rows="5"><?php echo $row['mota'];?></textarea></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="btsua" value="Sửa">
      </div>
    </td>
  </tr>
</table>
</form>
