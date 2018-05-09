<?php
include('../../lib/connect.php');
$id=$_GET['id'];
$matt=$_POST['matt'];
$loaitt=$_POST['loaitt'];	
if(isset($_POST['btthem']))
	{	
	if(empty($matt) or empty($loaitt))
		{
			echo"<script>alert('Không được bỏ trống!'); window.location.href='../quantri.php?quanly=qlloaitt&xuly=themltt'</script>";
			
		}
		else
		{
			$t=$pdo->exec("insert into mucsanpham values ('$matt','$loaitt')");
			header('location:../quantri.php?quanly=qlloaitt&xuly=themltt');
		}
	}
else if(isset($_POST['btsua']))
	{	
		$s=$pdo->exec("update mucsanpham set id_muc='$matt', tenmuc='$loaitt' where id_muc='$id'");		//header('location:../quantri.php?quanly=qlloaitt&xuly=sua&id='.$id);
		header('location:../quantri.php?quanly=qlloaitt&xuly=themltt');
	}

else 
{	
	$x=$pdo->exec("delete from mucsanpham where id_muc='$id'");
	header('location:../quantri.php?quanly=qlloaitt&xuly=themltt');}

	
?>