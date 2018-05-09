<table width="80%%" border="1">
  <tr>
    <td><div align="center">idCTDH</div></td>
    <td><div align="center">Mã HĐ</div></td>
    <td><div align="center">Mã SP</div></td>
    <td><div align="center">Số lượng</div></td>
    <td><div align="center">Giá</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
	$sql="select * from chitiethoadon";
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	?> 
  <tr>
    <td><?php echo $row['idCTDH'];?></td>
    <td><?php echo $row['idDH'];?></td>
    <td><?php echo $row['masp'];?></td>
    <td><?php echo $row['soluong'];?></td>
    <td><?php echo $row['dongia'];?></td>
    <td><div align="center"><a href="quantri.php?quanly=qlcthd&xuly=suacthd&idct=<?php echo $row['idCTDH'];?>">Sửa</a></div></td>
    <td><div align="center"><a href="QLchitiethoadon/xulyCTHD.php?idct=<?php echo $row['idCTDH'];?>">Xóa</a></div></td>
  </tr>
  <?php } ?>
</table>
