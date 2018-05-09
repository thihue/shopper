<div class="left">
	<?php
	if(isset($_GET['xuly'])) 
		$xl=$_GET['xuly'];
	else $xl="";
	if($xl=='themtk') include('QLtaikhoan/themTK.php');
	if($xl=='suatk') include('QLtaikhoan/suaTK.php');		
	?>
</div>
<div class="right">
	<?php
	include('QLtaikhoan/lietkeTK.php');
	?>
</div>