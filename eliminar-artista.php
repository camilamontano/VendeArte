<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_GET['id'];

$sql = "DELETE FROM artistas WHERE id = $id";

if (mysqli_query($conexion, $sql)) {
    header("Location: artistas.php");
    exit;
} else {
    echo "Error al eliminar";
}

mysqli_close($conexion);
?>