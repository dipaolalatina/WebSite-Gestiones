131<?php
	isset($_POST["email"]);
		$email=$_POST["email"];
?>
<html>
	<head>
		<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
		<title>Gestiones.cl</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/effect.js"></script>

	</head>
<body>
<div class="wrapper">
	<div class="container">
		<h1>Ingresar</h1>
		
		<form class="form" action="control.php" method="post">
			<input type="text" id="text" name="email" value="<?php echo $email; ?>">
			<input type="password" id="password" name="password" placeholder="">
			<?php
			if (isset($_POST["email"])) {
				echo "Usuario incorrecto";
			} else {
				if (isset($_POST["password"])) {
				echo "Contraseña incorrecta";
				}
			}

			?>
			<button type="submit" id="login-button">Enviar</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
</body>