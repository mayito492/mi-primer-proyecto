<?php
// procesar.php
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    echo "Estudiante buscado: " . $nombre;
}
?>