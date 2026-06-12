<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Artista - VendeArte</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <nav>
    <ul>
      <li><a href="registro-artista.php">Soy artista</a></li>  
      <li><a href="index.html">Inicio</a></li>
      <li><a href="artistas.php">Artistas</a></li>
      <li><a href="calculadora.php">Calculadora</a></li>
      <li><a href="contacto.php">Contacto</a></li>
    </ul>
  </nav>

  <section class="formulario">
    <h2>Regístrate como artista</h2>
    <p>Crea tu perfil y empieza a vender tu arte.</p>

    <form action="guardar-artista.php" method="POST">
      <input type="text" name="nombre" placeholder="Tu nombre completo" required>
      <input type="text" name="especialidad" placeholder="Tu especialidad (ej: cerámica, ilustración)" required>
      <input type="text" name="ciudad" placeholder="Tu ciudad" required>
      <input type="email" name="correo" placeholder="Tu correo electrónico" required>
      <textarea name="descripcion" placeholder="Cuéntanos sobre tu trabajo"></textarea>
      <button type="submit">Crear mi perfil</button>
    </form>

  </section>

</body>
</html>