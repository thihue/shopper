<?php
//include_once("config.php");
define("HOST","localhost");
define("DB_NAME","shopping");
define("USER","root");
define("PASS","");
define("so_sp_1_trang",8);
try
{
	$pdo=new PDO("mysql:host=".HOST.";dbname=".DB_NAME,USER,PASS);
	$pdo->query("set names utf8");
}catch(PDOException $e)
{
	echo $e->getMessage();
}
?>