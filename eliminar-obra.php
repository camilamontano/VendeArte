<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_GET['id'];

$sql = "DELETE FROM obras WHERE id = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: obras.php?msg=eliminado");
    exit;
} else {
    header("Location: obras.php?msg=error");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>