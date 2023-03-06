<?php
// Verificamos si el formulario fue enviado para borrar los comentarios
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrar_comentarios"])) {

    // Borramos el archivo si existe
    if (file_exists("comentarios.txt")) {
        unlink("comentarios.txt");
    }

    // Mostramos un mensaje de éxito
    echo "<p>Los comentarios fueron borrados con éxito.</p>";
}

// Borramos los comentarios que se muestran en la página principal no vamos a mostrar ningun archivo solo vamos a limpiar el archivo
if (file_exists("comentarios.txt")) {
    $archivo = fopen("comentarios.txt", "r+");
    ftruncate($archivo, 0);
    fclose($archivo);
    echo "<p>Los comentarios fueron borrados con éxito.</p>";
}
?>