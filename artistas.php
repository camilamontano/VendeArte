<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM artistas";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Artistas - VendeArte</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Artistas registrados</h2>

  <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
    <div class="card-artista">
      <h3><?php echo $fila['nombre']; ?></h3>
      <p><?php echo $fila['especialidad']; ?> · <?php echo $fila['ciudad']; ?></p>
      <p><?php echo $fila['descripcion']; ?></p>
      <p><?php echo $fila['correo']; ?></p>
      <a href="editar-artista.php?id=<?php echo $fila['id']; ?>">Editar</a>
      <a href="eliminar-artista.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
    </div>
<?php } ?>

  <?php mysqli_close($conexion); ?>

</body>
</html>