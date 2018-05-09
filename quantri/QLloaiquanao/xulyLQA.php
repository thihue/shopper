<?php
include('../../lib/connect.php');
$maloai=$_GET['maloai'];
$maqa=$_POST['maqa'];
$loaiqa=$_POST['loaiqa'];
$matt=$_POST['matt'];
if(isset($_POST['btthem']))
	{	
	if(empty($maqa) or empty($loaiqa))
		{
			echo"<script>alert('Không được bỏ trống!'); window.location.href='../quantri.php?quanly=qlloaiqa&xuly=themlqa'</script>";
			
		}
		else
		{
			$t=$pdo->exec("insert into loaisanpham values ('$maqa','$loaiqa','$matt')");
			header('location:../quantri.php?quanly=qlloaiqa&xuly=themlqa');
		}
	}
else if(isset($_POST['btsua']))
	{	
		$s=$pdo->exec("update loaisanpham set maloai='$maqa', tenloai='$loaiqa', id_muc='$matt' where maloai='$maloai'");		//header('location:../quantri.php?quanly=qlloaitt&xuly=sua&id='.$id);
		header('location:../quantri.php?quanly=qlloaiqa&xuly=themlqa');
	}

else 
{	
	$x=$pdo->exec("delete from loaisanpham where maloai='$maloai'");
	header('location:../quantri.php?quanly=qlloaiqa&xuly=themlqa');}

	
?>