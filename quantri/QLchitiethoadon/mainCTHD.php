<div class="left">
	<?php
	if(isset($_GET['xuly'])) 
		$xl=$_GET['xuly'];
	else $xl="";
	if($xl=='themcthd') include('QLchitiethoadon/themCTHD.php');
	if($xl=='suacthd') include('QLchitiethoadon/suaCTHD.php');		
	?>
</div>
<div class="right">
	<?php
	include('QLchitiethoadon/lietkecthd.php');
	?>
</div>