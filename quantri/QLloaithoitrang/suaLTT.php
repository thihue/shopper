<?php
/*if(isset($_GET['xuly'])&&($_GET['xuly']=='sua'))
{
$id=$_GET['id'];*/
$sql="select * from mucsanpham where id_muc='$_GET[id]'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
    <form action="QLloaithoitrang/xulyLTT.php?id=<?php echo $row['id_muc'];?>" method="post" enctype="multipart/form-data">
    <table width="95%" border="1">
      <tr>
        <td colspan="2"><div align="center">Sửa loại thời trang</div></td>
      </tr>
      
      <tr>
        <td>Mã TT</td>
        <td><input name="matt" type="text" size="30" value="<?php echo $row['id_muc'];?>"/></td>
      </tr>
      <tr>
        <td width="23%">Loại thời trang</td>
        <td width="77%"><input name="loaitt" type="text" size="30" value="<?php echo $row['tenmuc'];?>"/></td>
      </tr>
      <tr>
        <td colspan="2">
          <div align="center">
            <input type="submit" name="btsua" value="Sửa" />
          </div>
        </td>
      </tr>
    </table>
  	</form>
