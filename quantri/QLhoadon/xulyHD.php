<?php
include('../../lib/connect.php');
$mahd=$_GET['mahd'];
$ten=$_POST['ten'];
$dt=$_POST['dt'];
$ngaydat=$_POST['ngaydat'];

$ngaygiao=$_POST['ngaygiao'];
$dc=$_POST['dc'];
$tt=$_POST['tt'];

if(isset($_POST['btthem']))
	{		
			$t=$pdo->exec("insert into hoadon values (default,'0','$ten','$dt','$ngaydat','$ngaygiao','$dc','$tt')");
			header('location:../quantri.php?quanly=qlhd&xuly=lietkehd');
	}
else if(isset($_POST['btsua']))
	{	
		$s=$pdo->exec("update hoadon set tennguoinhan='$ten', sdtnguoinhan='$dt', TimeDatHang='$ngaydat', TimeNhanHang='$ngaygiao', DiaChiGiaoHang='$dc', TinhTrang='$tt' where idDH='$mahd'");		
		header('location:../quantri.php?quanly=qlhd&xuly=lietkehd');
	}
else 
{	
	$x=$pdo->exec("delete from hoadon where idDH='$mahd'");
	header('location:../quantri.php?quanly=qlhd&xuly=lietkehd');}

	
?>