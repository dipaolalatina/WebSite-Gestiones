<?php 
session_start();

if (!$_SESSION["autentificado"]) {
	# code...
	header("Location: salir.php");
}
 ?>
 