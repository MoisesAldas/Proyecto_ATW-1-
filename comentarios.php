<?php
// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comentario"])) {

    // Obtenemos el comentario enviado por el usuario
    $comentario = $_POST["comentario"];

    // Creamos el archivo de texto si no existe
    if (!file_exists("comentarios.txt")) {
        fopen("comentarios.txt", "w");
    }

    // Abrimos el archivo en modo escritura y posicionamos el puntero al final del archivo
    $archivo = fopen("comentarios.txt", "a");
    fseek($archivo, 0, SEEK_END);

    // Escribimos el comentario en el archivo
    fwrite($archivo, $comentario . PHP_EOL);

    // Cerramos el archivo
    fclose($archivo);
}

// Leemos los comentarios del archivo y los mostramos en la página
if (file_exists("comentarios.txt")) {
    $archivo = fopen("comentarios.txt", "r");

    while (!feof($archivo)) {
        $linea = fgets($archivo);
        echo "<p>$linea</p>";
    }

    fclose($archivo);
}
?>