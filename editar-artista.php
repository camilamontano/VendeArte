<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");

$id = $_GET['id'];
$sql = "SELECT * FROM artistas WHERE id = $id";
$resultado = mysqli_query($conexion, $sql);
$artista = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Artista - VendeArte</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <section class="formulario">
    <h2>Editar perfil</h2>

    <form action="actualizar-artista.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $artista['id']; ?>">
      <input type="text" name="nombre" value="<?php echo $artista['nombre']; ?>" required>
      <input type="text" name="especialidad" value="<?php echo $artista['especialidad']; ?>" required>
      <input type="text" name="ciudad" value="<?php echo $artista['ciudad']; ?>" required>
      <input type="email" name="correo" value="<?php echo $artista['correo']; ?>" required>
      <textarea name="descripcion"><?php echo $artista['descripcion']; ?></textarea>
      <button type="submit">Guardar cambios</button>
    </form>

  </section>

</body>
</html>