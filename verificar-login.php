<?php
session_start();

$conexion = mysqli_connect("localhost", "root", "", "vendearte");

if (!$conexion) {
    die("Error de conexión");
}

$correo = $_POST['correo'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE correo = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "s", $correo);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($resultado);

if ($usuario && password_verify($password, $usuario['password'])) {
    // Login correcto: guardamos datos en la sesión
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['correo'] = $usuario['correo'];
    $_SESSION['rol'] = $usuario['rol'];

    header("Location: admin.php");
    exit;
} else {
    // Login incorrecto
    header("Location: login.php?error=1");
    exit;
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>