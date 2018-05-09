<?php
include('../../lib/connect.php');
$masp=$_GET['masp'];
$tensp=$_POST['tensp'];
$slton=$_POST['slton'];
$thuonghieu=$_POST['thuonghieu'];

$hinh=$_FILES['hinh']['name'];

$maloai=$_POST['maloai'];
$gia=$_POST['gia'];
$mota=$_POST['mota'];

if(isset($_POST['btthem']))
	{		
			$t=$pdo->exec("insert into sanpham values (default,'$tensp','$slton','$maloai','$thuonghieu','$hinh','$gia','$mota')");
			header('location:../quantri.php?quanly=qlsp&xuly=lietkesp');
	}
else if(isset($_POST['btsua']))
	{	
		$s=$pdo->exec("update sanpham set tensp='$tensp', soluongton='$slton', maloai='$maloai', nhasx='$thuonghieu', hinh='$hinh', dongia='$gia', mota='$mota' where masp='$masp'");		//header('location:../quantri.php?quanly=qlloaitt&xuly=sua&id='.$id);
		header('location:../quantri.php?quanly=qlsp&xuly=lietkesp');
	}
else 
{	
	$x=$pdo->exec("delete from sanpham where masp='$masp'");
	header('location:../quantri.php?quanly=qlsp&xuly=lietkesp');}

	
?>