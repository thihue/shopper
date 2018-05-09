<table width="80%" border="1">
  <tr>
    <td width="7%"><div align="center">Mã loại QA</div></td>
    <td width="53%"><div align="center">Tên loại quần áo</div></td>
    <td width="9%"><div align="center">Loại TT</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
	$sql="select * from loaisanpham";
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	$id_muc=$row['id_muc'];	
	?>   
  <tr>
    <td><?php echo $row['maloai'];?></td>
    <td><?php echo $row['tenloai'];?></td>
     <?php
	$sql2="select * from mucsanpham where id_muc=$id_muc";
	$stmt2=$pdo->prepare($sql2);
	$stmt2->execute();
	$row2=$stmt2->fetch(PDO::FETCH_ASSOC);?>
    <td><?php echo $row2['tenmuc'];?></td>
    
    <td width="15%"><div align="center"><a href="quantri.php?quanly=qlloaiqa&xuly=sualqa&maloai=<?php echo $row['maloai'];?>">Sửa</a></div></td>
    <td width="16%"><div align="center"><a href="QLloaiquanao/xulyLQA.php?maloai=<?php echo $row['maloai'];?>">Xóa</a></div></td>
  </tr>
  <?php } ?>
</table>
