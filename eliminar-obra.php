<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_GET['id'];

$sql = "DELETE FROM obras WHERE id = $id";

if (mysqli_query($conexion, $sql)) {
    header("Location: obras.php");
    exit;
} else {
    echo "Error al eliminar";
}

mysqli_close($conexion);
?>