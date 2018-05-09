<?php
$sql="select * from mucsanpham";
$stmt=$pdo->prepare($sql);
$stmt->execute();
?>
<table width="100%" border="1">
  <tr>
    <td width="11%"><div align="center">Mã TT</div></td>
    <td width="62%"><div align="center">Loại thời trang</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
  <?php
  while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
  ?>
  <tr>
    <td><div align="center"><?php echo $row['id_muc']; ?>
</div>
   </td>
    <td><?php echo $row['tenmuc'];?></td>
    <td width="14%"><div align="center"><a href="quantri.php?quanly=qlloaitt&xuly=sualtt&id=<?php echo $row['id_muc']; ?>">Sửa</a></div></td>
    <td width="13%"><div align="center"><a href="QLloaithoitrang/xulyLTT.php?id=<?php echo $row['id_muc']; ?>">Xóa</a></div></td>
  </tr>
  <?php } ?>
</table>
