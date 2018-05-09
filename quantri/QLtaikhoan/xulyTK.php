<?php
include('../../lib/connect.php');
$idu=$_GET['idu'];
$user=$_POST['user'];
$pass=md5($_POST['pass']);
$email=$_POST['email'];
$dc=$_POST['dc'];
$dt=$_POST['dt'];
$id_group=$_POST['id_group'];

if(isset($_POST['btthem']))
	{		
			$t=$pdo->exec("insert into user values (default,'$pass','$user','$email','$dc','$dt','$id_group')");
			header('location:../quantri.php?quanly=qltk&xuly=themtk');
	}
else if(isset($_POST['btsua']))
	{	
		$s=$pdo->exec("update user set pass='$pass', username='$user', email='$email', diachi='$dc', dienthoai='$dt', id_group='$id_group' where idUser='$idu'");		
		header('location:../quantri.php?quanly=qltk&xuly=themtk');
	}
else 
{	
	$x=$pdo->exec("delete from user where idUser='$idu'");
	header('location:../quantri.php?quanly=qltk&xuly=themtk');}
?>