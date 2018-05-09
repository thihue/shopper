<?php
$sql="select * from loaisanpham where maloai='$_GET[maloai]'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="QLloaiquanao/xulyLQA.php?maloai=<?php echo $row['maloai'];?>" method="post" enctype="multipart/form-data">
<table width="80%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại quần áo</div></td>
  </tr>
  <tr>
    <td width="10%">Mã loại QA</td>
    <td width="90%">
      <input name="maqa" type="text" size="30" value="<?php echo $row['maloai'];?>">
	</td>
  </tr>
  <tr>
    <td>Tên loại QA</td>
    <td><input name="loaiqa" type="text" size="30" value="<?php echo $row['tenloai'];?>"></td>
  </tr>
  <tr>
    <td>Mã TT</td>
    <td>
      <select name="matt">
      	 <option>-Chọn loại thời  trang-</option>
		<?php
        //include('../../lib/connect.php');
        $sql="select * from mucsanpham ";
        $stmt2=$pdo->prepare($sql);
        $stmt2->execute();
        while($row2=$stmt2->fetch(PDO::FETCH_ASSOC)){
		if($row['id_muc']==$row2['id_muc']){
		?>
        <option value="<?php echo $row2['id_muc'];?>" selected="selected"><?php echo $row2['tenmuc'];?></option>
         <?php } else{?> 
         <option value="<?php echo $row2['id_muc'];?>"><?php echo $row2['tenmuc'];?></option>   
        <?php } }?>      
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="btsua" id="btsua" value="Sửa">
      </div>
    </td>
  </tr>
</table>
</form>
