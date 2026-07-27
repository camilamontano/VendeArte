<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE obras SET 
        titulo=?, 
        categoria=?, 
        precio=?, 
        descripcion=? 
        WHERE id=?";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "ssdsi", $titulo, $categoria, $precio, $descripcion, $id);

if (mysqli_stmt_execute($stmt)) {
    header("Location: obras.php?msg=actualizado");
    exit;
} else {
    header("Location: obras.php?msg=error");
    exit;
}