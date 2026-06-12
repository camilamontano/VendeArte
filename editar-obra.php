<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_GET['id'];
$sql = "SELECT * FROM obras WHERE id = $id";
$resultado = mysqli_query($conexion, $sql);
$obra = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Obra - VendeArte</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <section class="formulario">
    <h2>Editar obra</h2>

    <form action="actualizar-obra.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $obra['id']; ?>">
      <input type="text" name="titulo" value="<?php echo $obra['titulo']; ?>" required>
      <input type="text" name="categoria" value="<?php echo $obra['categoria']; ?>" required>
      <input type="number" name="precio" value="<?php echo $obra['precio']; ?>" required>
      <textarea name="descripcion"><?php echo $obra['descripcion']; ?></textarea>
      <button type="submit">Guardar cambios</button>
    </form>

  </section>

</body>
</html>