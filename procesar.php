<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];


$conexion = mysqli_connect("localhost", "root", "", "vendearte");


if (!$conexion) {
    echo "Error de conexión";
    exit;
}


$sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if (mysqli_query($conexion, $sql)) {
    echo "Gracias " . $nombre . ", tu mensaje fue guardado correctamente.";
} else {
    echo "Error al guardar";
}

mysqli_close($conexion);
?>