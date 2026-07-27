<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$conexion = mysqli_connect("localhost", "root", "", "vendearte");

if (!$conexion) {
    echo "Error de conexión";
    exit;
}

$sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "sss", $nombre, $email, $mensaje);

if (mysqli_stmt_execute($stmt)) {
    echo "Gracias " . htmlspecialchars($nombre) . ", tu mensaje fue guardado correctamente.";
} else {
    echo "Error al guardar";
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>