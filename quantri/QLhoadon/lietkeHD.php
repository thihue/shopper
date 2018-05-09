<p>Đơn hàng chưa duyệt</p>
<table width="81%" border="1">
  <tr>
    <td width="8%"><div align="center">Mã HĐ</div></td>
    <td width="7%"><div align="center">Mã KH</div></td>
    <td width="15%"><div align="center">Tên người nhận</div></td>
    <td width="15%"><div align="center">SĐT người nhận</div></td>
    <td width="9%"><div align="center">Ngày đặt</div></td>
    <td width="10%"><div align="center">Ngày giao</div></td>
    <td width="18%"><div align="center">Địa chỉ nhận hàng</div></td>
    <td width="8%"><div align="center">Tình trạng</div></td>
    <td colspan="2"><div align="center"><a href="quantri.php?quanly=qlhd&xuly=themhd">Thêm</a></div></td>
  </tr>
  <?php
		$sql= "select * from hoadon where TinhTrang=0 order by idDH desc";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
  <tr>
    <td><?php echo $row['idDH'];?></td>
    <td><?php echo $row['idUser'];?></td>
    <td><?php echo $row['tennguoinhan'];?></td>
    <td><?php echo $row['sdtnguoinhan'];?></td>
    <td><?php echo $row['TimeDatHang'];?></td>
    <td><?php echo $row['TimeNhanHang'];?></td>
    <td><?php echo $row['DiaChiGiaoHang'];?></td>
    <td><?php echo $row['TinhTrang'];?></td>
    <td width="5%">
	<?php if($row['TinhTrang']!=1){?><div align="center"><a href="quantri.php?quanly=qlhd&xuly=suahd&mahd=<?php echo $row['idDH'];?>">Sửa</a><?php } ?></div></td>
    <td width="5%">
	<?php if($row['TinhTrang']!=1){?><div align="center"><a href="QLhoadon/xulyHD.php?mahd=<?php echo $row['idDH'];?>">Xóa</a></div><?php } ?></td>
  </tr>
  <?php } ?>
</table>
<br/>
<br/>
<p>Đơn hàng đã duyệt</p>
<table width="81%" border="1">
  <tr>
    <td width="8%"><div align="center">Mã HĐ</div></td>
    <td width="7%"><div align="center">Mã KH</div></td>
    <td width="15%"><div align="center">Tên người nhận</div></td>
    <td width="15%"><div align="center">SĐT người nhận</div></td>
    <td width="9%"><div align="center">Ngày đặt</div></td>
    <td width="10%"><div align="center">Ngày giao</div></td>
    <td width="18%"><div align="center">Địa chỉ nhận hàng</div></td>
    <td width="8%"><div align="center">Tình trạng</div></td>
    <td colspan="2"><div align="center"><a href="quantri.php?quanly=qlhd&xuly=themhd">Thêm</a></div></td>
  </tr>
  <?php
		$sql= "select * from hoadon where TinhTrang=1 order by idDH desc";
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
  <tr>
    <td><?php echo $row['idDH'];?></td>
    <td><?php echo $row['idUser'];?></td>
    <td><?php echo $row['tennguoinhan'];?></td>
    <td><?php echo $row['sdtnguoinhan'];?></td>
    <td><?php echo $row['TimeDatHang'];?></td>
    <td><?php echo $row['TimeNhanHang'];?></td>
    <td><?php echo $row['DiaChiGiaoHang'];?></td>
    <td><?php echo $row['TinhTrang'];?></td>
    <td width="5%">
	<?php if($row['TinhTrang']!=1){?><div align="center"><a href="quantri.php?quanly=qlhd&xuly=suahd&mahd=<?php echo $row['idDH'];?>">Sửa</a><?php } ?></div></td>
    <td width="5%">
	<?php if($row['TinhTrang']!=1){?><div align="center"><a href="QLhoadon/xulyHD.php?mahd=<?php echo $row['idDH'];?>">Xóa</a></div><?php } ?></td>
  </tr>
  <?php } ?>
</table>
