<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE obras SET 
        titulo='$titulo', 
        categoria='$categoria', 
        precio='$precio', 
        descripcion='$descripcion' 
        WHERE id=$id";

if (mysqli_query($conexion, $sql)) {
    header("Location: obras.php");
    exit;
} else {
    echo "Error al actualizar";
}

mysqli_close($conexion);
?>