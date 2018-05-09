<?php
include"lib/connect.php";
session_start();

if(isset($_POST['dangnhap']))
	{
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$pass = md5($pass);
		$sql = "select * from user where username='$username' and pass='$pass'";		
		$stmt=$pdo->prepare($sql);
		$stmt->execute();			
		//$row = $stmt->fetchAll();
		$row=$stmt->fetch(PDO::FETCH_ASSOC);
		if($row>0)
			{
				$_SESSION['username'] = $username;
				$_SESSION['idUser'] = $row['idUser'];		
				$_SESSION['id_group'] = $row['id_group'];
				$_SESSION['username'] = $row['username'];
				echo"<script>alert('Đăng nhập thành công!'); window.location.href='index.php'</script>";
				//header('location:index.php');
				
			}		
		else
			{			
				echo"<script>alert('Đăng nhập không thành công!');
					
				//window.location.href='index.php?p=dnhapvadki'</script>";
				echo $username;
				echo $pass;
				//header('location:index.php?p=dnhapvadki');
			}		
	}
?>