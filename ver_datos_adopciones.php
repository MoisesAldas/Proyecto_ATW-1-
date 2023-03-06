<!DOCTYPE html>
<html>
<head>
	<title>Visualizar datos</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f4f4f4;
		}
		h1 {
			text-align: center;
			color: #333;
		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			width: 90%;
			max-width: 800px;
			background-color: #fff;
			box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
			border-radius: 5px;
			overflow: hidden;
		}
		th, td {
			padding: 10px;
			text-align: left;
		}
		th {
			background-color: #333;
			color: #fff;
		}
		tr:nth-child(even) {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Visualizar datos</h1>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Correo electrónico</th>
			<th>Teléfono</th>
			<th>Dirección</th>
			<th>Tipo de mascota</th>
			<th>Razón de la adopción</th>
		</tr>
		<?php
		$archivo = fopen("datos_adopciones.txt", "r") or die("No se pudo abrir el archivo.");

		while (!feof($archivo)) {
			$linea = fgets($archivo);

			if ($linea != "") {
				$datos = explode("|", $linea);
				echo "<tr>";
				echo "<td>" . $datos[0] . "</td>";
				echo "<td>" . $datos[1] . "</td>";
				echo "<td>" . $datos[2] . "</td>";
				echo "<td>" . $datos[3] . "</td>";
				echo "<td>" . $datos[4] . "</td>";
				echo "<td>" . $datos[5] . "</td>";
				echo "</tr>";
			}
		}

		fclose($archivo);
		?>
	</table>
</body>
</html>
