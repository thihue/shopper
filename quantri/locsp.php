<form id="form1" name="form1" method="get" action="locsp.php">
  <p>
    <label for="loaitt">Loại thời trang</label>
    <select name="loaitt" onchange="form1.submit()">
    <?php
	include("../lib/connect.php");
	$sm="select * from mucsanpham";
	$stmt=$pdo->prepare($sm);
	$stmt->execute();
	//Danh dau lay idCL cua dong du lieu dau tien
	$id_muc=0;
	while($dm=$stmt->fetch(PDO::FETCH_ASSOC)){
		if($id_muc==0) $id_muc=$dm['id_muc'];//Danh dau de lay idCL cua dong du lieu dau tien
	?>
      <option value="<?php echo $dm['id_muc'];?>" <?php if(isset($_GET['loaitt'])&&$_GET['loaitt']==$dm['id_muc']) echo "selected='selected'";?>><?php echo $dm['tenmuc'];?></option>
    <?php }?>
    </select>
  </p>
  
<?php
//Neu ton tai GET (submit form) thi gan lai gia tri cho idCL
if(isset($_GET['loaitt'])) $id_muc=$_GET['loaitt'];

	$slsp="select * from loaisanpham where id_muc=$id_muc";
	$stmt2=$pdo->prepare($slsp);
	$stmt2->execute();
	
?>  
  <p>
    <label for="loaisp">Loai sp:</label>
    <select name="loaisp" id="loaisp" onchange="form1.submit()">
    <?php
	$maloai=0;
	$kt=0; //Submit bang chung loai hoac lan dau tien chay len
	while($dlsp=$stmt2->fetch(PDO::FETCH_ASSOC))
	{ 
	if($maloai==0) $maloai=$dlsp['maloai']; //Giu lai idLoai dau tien
	?>
      <option value="<?php echo $dlsp['maloai'];?>" <?php if(isset($_GET['loaisp'])&&$_GET['loaisp']==$dlsp['maloai']) {echo "selected='selected'";$kt=1; //kt=1=> submit bang loaisp
	  }?>><?php echo $dlsp['tenloai'];?></option>
      <?php }?>
    </select>
  </p>

</form>
<?php
if($kt==1) $maloai=$_GET['loaisp'];

	$slsp="select * from sanpham where maloai=$maloai";
	$stmt3=$pdo->prepare($slsp);
	$stmt3->execute();
?>
<table width="542" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70">idSP</td>
    <td width="214">Ten San Pham</td>
    <td width="156">Hinh</td>
    <td width="92">Gia</td>
  </tr>
  <?php
  while($dsp=$stmt3->fetch(PDO::FETCH_ASSOC))
  { 
  ?>
  <tr>
    <td><?php echo $dsp['masp'];?></td>
    <td><?php echo $dsp['tensp'];?></td>
    <td><?php echo $dsp['soluongton'];?></td>
    <td><?php echo $dsp['nhasx'];?></td>
    <td><img src="../pp/<?php echo $dsp['hinh'];?>" width="150" height="200" /></td>
    <td><?php echo $dsp['dongia'];?></td>
  </tr>
  <?php }?>
</table>