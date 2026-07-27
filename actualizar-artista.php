<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$especialidad = $_POST['especialidad'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE artistas SET 
        nombre=?, 
        especialidad=?, 
        ciudad=?, 
        correo=?, 
        descripcion=? 
        WHERE id=?";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "sssssi", $nombre, $especialidad, $ciudad, $correo, $descripcion, $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: artistas.php?msg=actualizado");
    exit;
} else {
    header("Location: artistas.php?msg=error");
    exit;
}