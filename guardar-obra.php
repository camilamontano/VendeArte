<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

if (!$conexion) {
    header("Location: registro-obra.php?msg=error");
    exit;
}

$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

$imagen = '';
if (!empty($_FILES['imagen']['name'])) {
    $imagen = time() . '_' . $_FILES['imagen']['name'];
    move_uploaded_file($_FILES['imagen']['tmp_name'], 'uploads/' . $imagen);
}

$sql = "INSERT INTO obras (titulo, categoria, precio, descripcion, imagen) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "ssdss", $titulo, $categoria, $precio, $descripcion, $imagen);

if (mysqli_stmt_execute($stmt)) {
    header("Location: obras.php?msg=creado");
    exit;
} else {
    header("Location: registro-obra.php?msg=error");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>