<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM obras";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Obras - VendeArte</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>Obras registradas</h2>
<div>
      <a href="registro-obra.php">+ Registrar mi obra</a>
    </div>
  <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
  
    <div class="card-obra">
      <h3><?php echo $fila['titulo']; ?></h3>
      <p><?php echo $fila['categoria']; ?> · <?php echo $fila['precio']; ?></p>
      <p><?php echo $fila['descripcion']; ?></p>
      <a href="editar-obra.php?id=<?php echo $fila['id']; ?>">Editar</a>
      <a href="eliminar-obra.php?id=<?php echo $fila['id']; ?>">Eliminar</a>
    </div>
<?php } ?>

  <?php mysqli_close($conexion); ?>

</body>
</html>