<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "cge47111_subscri";
$pass = "0)^j&4[PN^88";
$db = "cge47111_subscribe";
$conexion = mysql_connect($host, $user, $pass) OR die("No hay conexion papito");
mysql_select_db($db, $conexion) or die("No pasa naipe");
?>
