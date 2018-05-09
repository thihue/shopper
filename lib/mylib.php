<?php
define("SACH_1_TRANG",6);
function catchuoi($s,$n)
{
	if(strlen($s)<=$n)
		return $s;
	while($n>0&&$s[$n-1]!=" ")
		$n--;
	if($n<=0)
		return $s;
	return substr($s,0,$n)."...";
}

?>