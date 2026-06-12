<?php


$conexion = mysqli_connect("localhost", "root", "", "vendearte");


if (!$conexion) {
    echo "Error de conexión";
    exit;
}

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];


$sql = "INSERT INTO obras (titulo, categoria, precio, descripcion) 
        VALUES ('$titulo', '$categoria', '$precio', '$descripcion')";

if (mysqli_query($conexion, $sql)) {
    header("Location: obras.php");
    exit;
} else {
    echo "Error al guardar";
}

mysqli_close($conexion);
?>