<?php 
session_start(); 
if (isset($_SESSION['idUser']))
{
	unset($_SESSION['username']);
	unset($_SESSION['idUser']);
	unset($_SESSION['id_group']);
	echo"<script>alert('Đăng xuất thành công!'); window.location.href='index.php'</script>";
	//header("Location:index.php");
}
?>