<?php
$sql="select * from user where idUser='$_GET[idu]'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
<form action="QLtaikhoan/xulyTK.php?idu=<?php echo $row['idUser'];?>" method="post" enctype="multipart/form-data">
<div align="center">
  <table width="80%%" border="1">
    <tr>
      <td colspan="2"><div align="center">Sửa tài khoản</div></td>
    </tr>
    <tr>
      <td>idUser</td>
      <td><?php echo $row['idUser'];?></td>
    </tr>
    <tr>
      <td width="31%">Username</td>
      <td width="69%"><input type="text" name="user" value="<?php echo $row['username'];?>"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pass" value="<?php echo $row['pass'];?>"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
    </tr>
    <tr>
      <td>Địa chỉ</td>
      <td><input type="text" name="dc" value="<?php echo $row['diachi'];?>"></td>
    </tr>
    <tr>
      <td>Điện thoại</td>
      <td><input type="text" name="dt" value="<?php echo $row['dienthoai'];?>"></td>
    </tr>
    <tr>
      <td>id_group</td>
      <td><input type="text" name="id_group" value="<?php echo $row['id_group'];?>"></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" name="btsua" value="Sửa">
        </div>
      </td>
    </tr>
  </table>
</div>
