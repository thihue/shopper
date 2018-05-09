<div class="left">
	<?php
	if(isset($_GET['xuly'])) $xl=$_GET['xuly'];
	else $xl="";
	if($xl=='themltt') include('QLloaithoitrang/themLTT.php');
	if($xl=='sualtt') include('QLloaithoitrang/suaLTT.php');
		
	?>
</div>
<div class="right">
	<?php
	include('QLloaithoitrang/lietkeLTT.php');
	?>
</div>