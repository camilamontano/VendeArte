<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro de Obra - VendeArte</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

  <?php include 'nav.php'; ?>

  <section class="formulario">
    <h2>Registra tu obra</h2>
    <?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
  <div class="alerta alerta-error">✗ Hubo un error al guardar la obra. Inténtalo de nuevo.</div>
<?php endif; ?>
    <p>Comparte tu trabajo con la comunidad.</p>

    <form action="guardar-obra.php" method="POST" enctype="multipart/form-data">
  <input type="text" name="titulo" placeholder="Título de la obra" required>
  <input type="text" name="categoria" placeholder="Categoría (ej: pintura, escultura)" required>
  <input type="number" name="precio" placeholder="Precio" required>
  <textarea name="descripcion" placeholder="Descripción de la obra"></textarea>
  <input type="file" name="imagen" accept="image/*">
  <button type="submit">Registrar obra</button>
</form>

  </section>

</body>
</html>