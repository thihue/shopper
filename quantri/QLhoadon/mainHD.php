<?php
	if(isset($_GET['xuly'])) 
		$xl=$_GET['xuly'];
	else $xl="";
	if($xl=='themhd') include('QLhoadon/themHD.php');
	if($xl=='suahd') include('QLhoadon/suaHD.php');		
	if($xl=='lietkehd') include('QLhoadon/lietkeHD.php');
?>
