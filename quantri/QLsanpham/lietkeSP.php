
<table width="99%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="3%"><div align="center">Mã SP</div></td>
    <td width="15%"><div align="center">Tên sản phẩm</div></td>
    <td width="3%"><div align="center">SL tồn</div></td>
    <td width="12%"><div align="center">Thương hiệu</div></td>
    <td width="19%"><div align="center">Hình</div></td>
    <td width="9%"><div align="center">Loại Quần áo</div></td>
    <td width="8%"><div align="center">Giá</div></td>
    <td width="23%"><div align="center">Mô Tả</div></td>
    <td colspan="2"><div align="center"><a href="quantri.php?quanly=qlsp&xuly=themsp">Thêm</a></div></td>
  </tr>
	<?php
		$sql= "select * from sanpham order by masp desc";
		$trang=1;
		if(isset($_GET['trang']))
		$trang=$_GET['trang'];
		$vitri=($trang-1)*so_sp_1_trang;
		$sql.=" limit ".$vitri.",".so_sp_1_trang;
		
		$stmt=$pdo->prepare($sql);
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			$ml=$row['maloai'];
    ?>
  <tr>
    <td><?php echo $row['masp'];?></td>
    <td><?php echo $row['tensp'];?></td>
    <td><?php echo $row['soluongton'];?></td>
    <td><?php echo $row['nhasx'];?></td>
    <td><img src="../pp/<?php echo $row['hinh'];?>" style="width:180px;"/></td>
    <?php
	$sql="select * from loaisanpham where  maloai='$ml'"; 
	$stmt2=$pdo->prepare($sql);
	$stmt2->execute();
	$row2=$stmt2->fetch(PDO::FETCH_ASSOC);?>
	<td><?php echo $row2['tenloai'];?></td>
    
    <td><?php echo $row['dongia'];?></td>
    <td><?php echo $row['mota'];?></td>
    <td width="4%"><div align="center"><a href="quantri.php?quanly=qlsp&xuly=suasp&masp=<?php echo $row['masp'];?>">Sửa</a></div></td>
    <td width="4%"><div align="center"><a href="QLsanpham/xulySP.php?masp=<?php echo $row['masp'];?>">Xóa</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php
$sql="select count(*) from sanpham";
$stmt=$pdo->query($sql);
$tong=$stmt->fetchColumn(0);
$sotrang=ceil($tong/so_sp_1_trang);
for($i=1;$i<=$sotrang;$i++)
if($i!=$trang)
	echo '<a href="quantri.php?quanly=qlsp&xuly=lietkesp&trang='.$i.'">'.$i.'</a>&nbsp;';
else 
	echo $i;
?>

