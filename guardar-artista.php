<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

if (!$conexion) {
    die("Error de conexión");
}

$nombre = $_POST['nombre'];
$especialidad = isset($_POST['especialidades']) ? implode(', ', $_POST['especialidades']) : '';
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$descripcion = $_POST['descripcion'];
$telefono = $_POST['telefono'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$tiktok = $_POST['tiktok'];
$encargos = $_POST['encargos'];
$entrega = $_POST['entrega'];
$precio_min = $_POST['precio_min'];
$precio_max = $_POST['precio_max'];

// Subir foto de perfil
$foto = '';
if (!empty($_FILES['foto']['name'])) {
    $foto = time() . '_' . $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto);
}

// Subir imagen de fondo
$imagen_fondo = '';
if (!empty($_FILES['imagen_fondo']['name'])) {
    $imagen_fondo = time() . '_' . $_FILES['imagen_fondo']['name'];
    move_uploaded_file($_FILES['imagen_fondo']['tmp_name'], 'uploads/' . $imagen_fondo);
}

$sql = "INSERT INTO artistas (nombre, especialidad, ciudad, correo, descripcion, foto, imagen_fondo, telefono, instagram, facebook, tiktok, encargos, entrega, precio_min, precio_max) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param(
    $stmt,
    "sssssssssssssdd",
    $nombre, $especialidad, $ciudad, $correo, $descripcion,
    $foto, $imagen_fondo, $telefono, $instagram, $facebook,
    $tiktok, $encargos, $entrega, $precio_min, $precio_max
);

if (mysqli_stmt_execute($stmt)) {
    header("Location: registro-artista.php?msg=exito");
    exit;
} else {
    header("Location: registro-artista.php?msg=error");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>