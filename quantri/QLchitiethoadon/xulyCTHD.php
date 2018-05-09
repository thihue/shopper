<?php
include('../../lib/connect.php');
$masp=$_POST['masp'];
$idctdh=$_GET['idct'];
$madh=$_POST['idDH'];

$sl=$_POST['sl'];
$sql="select * from sanpham where masp='$masp'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$row=$stmt->fetch(PDO::FETCH_ASSOC);
$gia=$row['dongia'];



if(isset($_POST['btthem']))
	{		
			$t=$pdo->exec("insert into chitiethoadon values (default,'$madh','$masp','$sl','$gia*$sl')");
			header('location:../quantri.php?quanly=qlcthd&xuly=themcthd');
	}
else if(isset($_POST['btsua']))
	{	
		$s=$pdo->exec("update chitiethoadon set idDH='$madh', masp='$masp', soluong='$sl', dongia='$gia*$sl' where idCTDH='$idctdh'");		
		header('location:../quantri.php?quanly=qlcthd&xuly=themcthd');
	}
else 
{	
	$x=$pdo->exec("delete from chitiethoadon where idCTDH='$idctdh'");
	header('location:../quantri.php?quanly=qlcthd&xuly=themcthd');}

	
?>