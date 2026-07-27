<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - VendeArte</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <section class="formulario">
    <h2>Acceso administrador</h2>

    <?php if(isset($_GET['error'])): ?>
      <div class="alerta alerta-error">✗ Correo o contraseña incorrectos</div>
    <?php endif; ?>

    <form action="verificar-login.php" method="POST">
      <input type="email" name="correo" placeholder="Correo" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
    </form>
  </section>

</body>
</html>