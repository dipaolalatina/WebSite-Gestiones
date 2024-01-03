<?php 
include ('conexion.php');

$consulta=mysql_query("SELECT * FROM login");

	$filas=mysql_fetch_array($consulta);

		$usuario=$filas['email'];
		$pass=$filas['pass'];

if ($email=$_POST['email']!=$usuario) {
	$email=$_POST['email'];
	?>
	<form name="formulario" method="post" action="index.php">
		<input	type="hidden" name="email" value="<?php echo $email; ?>">
	</form>
	<?php
}else{
	if ($password=$_POST['password']!=$pass) {
		?>
	<form name="formulario" method="post" action="index.php">
		<input	type="hidden" name="password" value="<?php echo $password; ?>">
	</form>
	<?php
}else{
	session_start();
	$_SESSION["autentificado"] = true;
	$_SESSION["usuario"] = $_POST['email'];

	header("Location: home.php");
}
}
?>
<script type="text/javascript">
	document.formulario.submit();
</script>