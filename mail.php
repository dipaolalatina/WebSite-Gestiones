<?php ob_start(); ?> 
<?php
			$mysqli = new mysqli("localhost", "cge47111_subscri", "0)^j&4[PN^88", "cge47111_subscribe");

			/* comprobar la conexión */
			if ($mysqli->connect_errno) {
				printf("Falló la conexión: %s\n", $mysqli->connect_error);
				exit();
			}
			
			//obtiene valores del formulario
			$id = $_POST['id'];
			$fecha = $_POST['fecha'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$city = $_POST['city'];
			$msj = $_POST['msj'];
			$subject = 'Nuevo contacto';

			$para = 'contacto@gestiones.cl';
			$mensaje='De:'.$name.', Telefono: '.$phone.', Correo: '.$email.', Ciudad: '.$city.', Mensaje: '.$msj.'';


			$desde='From: '.$email.''; 
			ini_set(sendmail_from,'contacto@gestiones.cl'); mail($para,$subject,$mensaje,$desde); 
			// delete the cookie so it cannot sent again by refreshing this page
			setcookie('tntcon','');

			//verificamos que el correo no exista
			$mysqli->query("INSERT INTO correos (fecha, name, phone, email, city, msj) VALUES ('$fecha', '$name', '$phone', '$email', '$city', '$msj')");

			$mysqli->close();
			header('Location: index.php');
			exit;
		?>

<?php ob_end_flush(); ?> 