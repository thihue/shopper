<form action="QLloaiquanao/xulyLQA.php" method="post" enctype="multipart/form-data">
<table width="80%" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm loại quần áo</div></td>
  </tr>
  <tr>
    <td width="10%">Mã loại QA</td>
    <td width="90%">
      <input name="maqa" type="text" size="30">
	</td>
  </tr>
  <tr>
    <td>Tên loại QA</td>
    <td><input name="loaiqa" type="text" size="30"></td>
  </tr>
  <tr>
    <td>Loại TT</td>
    <td>   
      <select name="matt">
      	 <option>-Chọn loại thời  trang-</option>
		<?php
        //include('../../lib/connect.php');
        $sql="select * from mucsanpham ";
        $stmt=$pdo->prepare($sql);
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>
        <option value="<?php echo $row['id_muc'];?>"><?php echo $row['tenmuc'];?></option>
        <?php } ?>      
      </select>    
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="btthem" id="btthem" value="Thêm">
      </div>
    </td>
  </tr>
</table>
</form>
