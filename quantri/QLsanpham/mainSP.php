<?php
	if(isset($_GET['xuly'])) 
		$xl=$_GET['xuly'];
	else $xl="";
	if($xl=='themsp') include('QLsanpham/themSP.php');
	if($xl=='suasp') include('QLsanpham/suaSP.php');		
	if($xl=='lietkesp') include('QLsanpham/lietkeSP.php');
?>
