<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM contacto";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Admin - VendeArte</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <h2>Mensajes recibidos</h2>

  <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
    <div class="mensaje">
      <h3><?php echo $fila['nombre']; ?></h3>
      <p><?php echo $fila['correo']; ?></p>
      <p><?php echo $fila['mensaje']; ?></p>
    </div>
  <?php } ?>

  <?php mysqli_close($conexion); ?>

</body>
</html>