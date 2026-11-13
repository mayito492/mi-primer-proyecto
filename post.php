// Comprobar existencia
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
}
// Comprobar que no esté vacío
if (empty($_POST['nombre'])) {
    echo "El nombre es obligatorio.";
}
// Eliminar espacios
$nombre = trim($_POST['nombre']);
// Validar correo
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo "El correo electrónico no es válido.";
}
// Validar entero
if (filter_var($edad, FILTER_VALIDATE_INT) === false) {
    echo "La edad debe ser un número entero.";
}
// Validar rango
if ($edad < 15 || $edad > 100) {
    echo "La edad debe estar entre 15 y 100 años.";
}