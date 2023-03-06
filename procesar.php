<?php
if(isset($_POST['nombre']) && isset($_POST['mensaje']) && isset($_POST['edad']) && isset($_POST['correo']) && isset($_POST['sexo']) && isset($_POST['lugar'])) {
    $nombre = $_POST['nombre'];
    $mensaje = $_POST['mensaje'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $sexo = $_POST['sexo'];
    $lugar = $_POST['lugar'];
    
    $archivo = fopen('datos.txt', 'a'); // Abre el archivo en modo 'append'
    fwrite($archivo, "Nombre: $nombre\n");
    fwrite($archivo, "Mensaje: $mensaje\n");
    fwrite($archivo, "Edad: $edad\n");
    fwrite($archivo, "Correo: $correo\n");
    fwrite($archivo, "Sexo: $sexo\n");
    fwrite($archivo, "Lugar: $lugar\n");
    fwrite($archivo, "-------------------------\n"); // Agrega separador entre los datos
    fclose($archivo); // Cierra el archivo
    
    echo "Datos guardados correctamente.";
} else {
    echo "No se han recibido datos.";
}
?>
