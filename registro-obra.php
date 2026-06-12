<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Obra - VendeArte</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <nav>
    <ul>
      <li><a href="registro-obra.php">Soy artista</a></li>  
      <li><a href="index.html">Inicio</a></li>
      <li><a href="artistas.php">Artistas</a></li>
      <li><a href="obras.php">Obras</a></li>
      <li><a href="calculadora.php">Calculadora</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>

  <section class="formulario">
    <h2>Registra tu obra</h2>
    <p>Comparte tu trabajo con la comunidad.</p>

    <form action="guardar-obra.php" method="POST">
      <input type="text" name="titulo" placeholder="Título de la obra" required>
      <input type="text" name="categoria" placeholder="Categoría (ej: pintura, escultura)" required>
      <input type="number" name="precio" placeholder="Precio" required>
      <textarea name="descripcion" placeholder="Descripción de la obra"></textarea>
      <button type="submit">Registrar obra</button>
    </form>

  </section>

</body>
</html>