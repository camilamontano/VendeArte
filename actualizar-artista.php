<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE artistas SET 
        nombre='$nombre', 
        especialidad='$especialidad', 
        ciudad='$ciudad', 
        correo='$correo', 
        descripcion='$descripcion' 
        WHERE id=$id";

if (mysqli_query($conexion, $sql)) {
    header("Location: artistas.php");
    exit;
} else {
    echo "Error al actualizar";
}

mysqli_close($conexion);
?>