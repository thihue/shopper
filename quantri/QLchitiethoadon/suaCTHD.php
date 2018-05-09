<?php
$sql="select * from chitiethoadon where idCTDH='$_GET[idct]'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="QLchitiethoadon/xulyCTHD.php?idct=<?php echo $row['idCTDH'];?>" method="post" enctype="multipart/form-data">

<table width="88%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa chi tiết hóa đơn</div></td>
  </tr>
  <tr>
    <td>idCTDH</td>
    <td> <?php echo $row['idCTDH'];?></td>
  </tr>
  <tr>
    <td width="37%">Mã HĐ</td>
    <td width="63%">
      <select name="idDH">
        <option>-Chọn Mã HĐ-</option>
        <?php
        //include('../../lib/connect.php');
        $sql="select * from hoadon ";
        $stmt2=$pdo->prepare($sql);
        $stmt2->execute();
        while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
		if($row['idDH']==$row2['idDH']){
		?>
        <option value="<?php echo $row2['idDH'];?>" selected="selected"><?php echo $row2['idDH'];?></option>
         <?php } else{?> 
         <option value="<?php echo $row2['idDH'];?>"><?php echo $row2['idDH'];?></option>   
        <?php } }?>   
      </select>
    </td>
  </tr>
  <tr>
    <td>Mã SP</td>
    <td><select name="masp">
      <?php
        //include('../../lib/connect.php');
        $sql="select * from sanpham ";
        $stmt2=$pdo->prepare($sql);
        $stmt2->execute();
        while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
		if($row['masp']==$row2['masp']){
		?>
        <option value="<?php echo $row2['masp'];?>" selected="selected"><?php echo $row2['masp'];?></option>
         <?php } else{?> 
         <option value="<?php echo $row2['masp'];?>"><?php echo $row2['masp'];?></option>   
        <?php } }?>   
    </select></td>
  </tr>
  <tr>
    <td>Số lượng</td>
    <td>
    <input type="text" name="sl" value="<?php echo $row['soluong'];?>"></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td><input type="text" name="gia" value="<?php echo $row['dongia'];?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="btsua" value="Sửa" id="btsua">
    </div></td>
  </tr>
</table>
</form>
