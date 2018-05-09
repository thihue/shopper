<div align="center">
<table width="99%" border="1">
  <tr>
    <td><div align="center">idUser</div></td>
    <td><div align="center">Username</div></td>
    <td><div align="center">password</div></td>
    <td><div align="center">Email</div></td>
    <td><div align="center">Địa chỉ</div></td>
    <td><div align="center">Điện thoại</div></td>
    <td><div align="center">id_group</div></td>
    <td colspan="2"><div align="center">Quản lý</div></td>
  </tr>
   <?php
	$sql="select * from user";
	$stmt=$pdo->prepare($sql);
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	?> 
  <tr>
    <td><?php echo $row['idUser'];?></td>
    <td><?php echo $row['username'];?></td>
    <td><?php echo $row['pass'];?></td>
    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['diachi'];?></td>
    <td><?php echo $row['dienthoai'];?></td>
    <td><?php echo $row['id_group'];?></td>
    <td><div align="center"><a href="quantri.php?quanly=qltk&xuly=suatk&idu=<?php echo $row['idUser'];?>">Sửa</a></div></td>
    <td><div align="center"><a href="QLtaikhoan/xulyTK.php?idu=<?php echo $row['idUser'];?>">Xóa</a></div></td>
  </tr>
  <?php } ?>
</table>
</div>