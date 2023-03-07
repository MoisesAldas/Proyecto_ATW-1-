<?php
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$nombre = $_POST["nombre"];
			$edad = $_POST["edad"];
            $correo = $_POST["corre"];


			// Abre el archivo en modo "a" (append) para agregar datos al final del archivo
			$archivo = fopen("datosC.txt", "a");

			// Escribe los datos en el archivo separados por comas
			fwrite($archivo, "$nombre,$edad,$correo\n");

			// Cierra el archivo
			fclose($archivo);

			echo "<p>Los datos se han registrado correctamente.</p>";
		}
	?>