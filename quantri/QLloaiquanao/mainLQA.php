<div class="left">
	<?php
	if(isset($_GET['xuly'])) 
		$xl=$_GET['xuly'];
	else $xl="";
	if($xl=='themlqa') include('QLloaiquanao/themLQA.php');
	if($xl=='sualqa') include('QLloaiquanao/suaLQA.php');		
	?>
</div>
<div class="right">
	<?php
	include('QLloaiquanao/lietkeLQA.php');
	?>
</div>