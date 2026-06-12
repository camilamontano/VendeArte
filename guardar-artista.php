<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

if (!$conexion) {
    echo "Error de conexión";
    exit;
}

$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO artistas (nombre, especialidad, ciudad, correo, descripcion) 
        VALUES ('$nombre', '$especialidad', '$ciudad', '$correo', '$descripcion')";

if (mysqli_query($conexion, $sql)) {
    header("Location: artistas.php");
    exit;
} else {
    echo "Error al guardar";
}

mysqli_close($conexion);
?>