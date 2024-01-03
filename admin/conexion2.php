<?php
	class conexion{
		function recuperarDatos(){
			$host = "localhost";
			$user = "cge47111_subscri";
			$pw = "0)^j&4[PN^88";
			$db = "cge47111_subscribe";

			$con = mysql_connect($host, $user, $pw) or die("No se pudo conectar a la base de datos ");
			mysql_select_db($db, $con) or die ("No se encontro la base de datos. ");
			$query = "SELECT * FROM correos";
			$respuestas = mysql_query($query);

			while ($fila = mysql_fetch_array($respuestas)) {
				echo " <tr>";
				echo "<td> $fila[fecha]  </td> <td> $fila[name]  </td> <td> $fila[phone]  </td> <td> $fila[email]  </td> <td> $fila[city]  </td> <td> $fila[msj]  </td>";
				echo " </tr> ";
			}

		}
	}
?>