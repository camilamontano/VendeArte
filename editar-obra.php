<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_GET['id'];
$sql = "SELECT * FROM obras WHERE id = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$resultado = mysqli_stmt_get_result($stmt);
$obra = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>Editar Obra - VendeArte</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <section class="formulario">
    <h2>Editar obra</h2>

    <form action="actualizar-obra.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $obra['id']; ?>">
      <input type="text" name="titulo" value="<?php echo htmlspecialchars($obra['titulo']); ?>" required>
      <input type="text" name="categoria" value="<?php echo htmlspecialchars($obra['categoria']); ?>" required>
      <input type="number" name="precio" value="<?php echo $obra['precio']; ?>" required>
      <textarea name="descripcion"><?php echo htmlspecialchars($obra['descripcion']); ?></textarea>
      <button type="submit">Guardar cambios</button>
    </form>

  </section>

</body>
</html>