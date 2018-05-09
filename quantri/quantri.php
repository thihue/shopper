<?php 
include('../lib/connect.php');
ob_start();
session_start();
if(!isset($_SESSION['idUser']) || $_SESSION['id_group']==2){
	header('location:../index.php');}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản trị</title>
<link rel="stylesheet" type="text/css" href="layout.css"/>
</head>

<body>

<div class="wrapper">
    <div class="header">
    	<div class="logo"><img style="width:220px; height:50px;" src="../themes/images/logo.png"/></div>
		<div class="tieude">QUẢN TRỊ NỘI DUNG WEBSITE</p></div>
        <div style="width:200px; float:right">
        	<div>Hello <span style="color:#F00"> <?php echo $_SESSION['username'];?></span></div>
       </div> 
    </div>
    <div class="menu">
    	<ul>
    	<li><a href="../">Trang Chủ</a></li>
		<li><a href="quantri.php?quanly=qlloaitt&xuly=themltt">Loại Thời Trang</a></li>
		<li><a href="quantri.php?quanly=qlloaiqa&xuly=themlqa">Loại Quần Áo</a></li>
		<li><a href="quantri.php?quanly=qlsp&xuly=lietkesp">Sản Phẩm</a></li>
        
        <li><a href="quantri.php?quanly=qlhd&xuly=lietkehd">Hóa Đơn</a></li>
        <li><a href="quantri.php?quanly=qlcthd&xuly=themcthd">Chi Tiết Hóa Đơn</a></li>
        <li><a href="quantri.php?quanly=qltk&xuly=themtk">Tài Khoản</a></li>
        <li><a href="quantri.php?quanly=locsp">Lọc sản phẩm</a></li>       
		</ul>
    </div>
    <div class="content">
    
    <br/>
		<?php
        if(isset($_GET['quanly']))
            $ql=$_GET['quanly'];
        else
            $ql="";
        //
        if($ql=='qlloaitt')
            include('QLloaithoitrang/mainLTT.php');
        if($ql=='qlloaiqa')
            include('QLloaiquanao/mainLQA.php');
		if($ql=='qlsp')
            include('QLsanpham/mainSP.php');
		if($ql=='qlhd')
            include('QLhoadon/mainHD.php');
		if($ql=='qlcthd')
            include('QLchitiethoadon/mainCTHD.php');
		if($ql=='qltk')
            include('QLtaikhoan/mainTK.php');
		if($ql=='locsp')
            include('locsp.php');
        ?>
    </div>
    <div class="footer"></div>
</div>

</body>
</html>