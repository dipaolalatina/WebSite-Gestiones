<?php
include("sesion.php");
 ?>
<html>
	<head>
		<meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
		<title>Gestiones.cl</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="js/effect.js"></script>
		<style>
		table{
			width:100%;
		}
		td{
			text-align:left;
			width:10%;
		}
		body{
			color:#000;
		}
		</style>
	</head>
	<body>
		<div>
			<fieldset>
				<legend> Datos recuperados: </legend>
				<div>
					<table>
						<tr>
							<td>Fecha</td> 						
							<td>Nombre</td>
							<td>Teléfono</td>
							<td>Correo</td>
							<td>Ciudad</td>
							<td>Mensaje</td>
						</tr>
					<?php
					    include("conexion2.php");
					    $Con = new conexion();
					    $Con->recuperarDatos();
					?>
					</table>
				</div>
			</fieldset>
		</div>
		<a href="descargar-base.php">DESCARGAR</a><br>
		<a id='enlaces' href='salir.php'>Salir</a>
	</body>
	<footer>
		
	</footer>
</html>