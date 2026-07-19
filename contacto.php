<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Contacto - VendeArte</title>
</head>
<body>

<?php include 'nav.php'; ?>

<section class="pagina-header">
  <p class="eyebrow">Escríbenos</p>
  <h1>Contáctanos</h1>
  <p class="seccion-desc">¿Tienes preguntas sobre una obra, un encargo o quieres unirte a VendeArte? Estamos aquí.</p>
</section>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'exito'): ?>
  <div class="alerta alerta-exito">✓ Mensaje enviado correctamente. Te contactaremos pronto.</div>
<?php endif; ?>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
  <div class="alerta alerta-error">✗ Hubo un error al enviar tu mensaje. Inténtalo de nuevo.</div>
<?php endif; ?>

<section class="contacto-pagina">
  <div class="contacto-contenedor">

    <!-- Info -->
    <div class="contacto-info">
      <h3>Información de contacto</h3>
      <div class="info-item">
        <span class="info-icono"></span>
        <div>
          <p class="info-titulo">Correo</p>
          <p>hola@vendearte.co</p>
        </div>
      </div>
      <div class="info-item">
        <span class="info-icono"></span>
        <div>
          <p class="info-titulo">Ubicación</p>
          <p>Buenaventura, Valle del Cauca, Colombia</p>
        </div>
      </div>
      <div class="info-item">
        <span class="info-icono"></span>
        <div>
          <p class="info-titulo">Instagram</p>
          <p>@vendearte.co</p>
        </div>
      </div>
      <div class="info-item">
        <span class="info-icono"></span>
        <div>
          <p class="info-titulo">TikTok</p>
          <p>@vendearte</p>
        </div>
      </div>

      <div class="contacto-horario">
        <h4>Horario de atención</h4>
        <p>Lunes a viernes: 8am — 6pm</p>
        <p>Sábados: 9am — 1pm</p>
      </div>
    </div>

    <!-- Formulario -->
    <div class="formulario-card">
      <h3>Envíanos un mensaje</h3>
      <form action="procesar.php" method="POST">
        <div class="form-grupo">
          <label>Nombre completo</label>
          <input type="text" name="nombre" placeholder="Tu nombre" required>
        </div>
        <div class="form-grupo">
          <label>Correo electrónico</label>
          <input type="email" name="email" placeholder="Tu correo" required>
        </div>
        <div class="form-grupo">
          <label>Asunto</label>
          <select name="asunto">
            <option value="">Selecciona un asunto</option>
            <option value="encargo">Quiero hacer un encargo</option>
            <option value="artista">Quiero ser artista</option>
            <option value="soporte">Soporte técnico</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        <div class="form-grupo">
          <label>Mensaje</label>
          <textarea name="mensaje" placeholder="Cuéntanos en qué podemos ayudarte" required></textarea>
        </div>
        <button type="submit" class="btn-submit">Enviar mensaje</button>
      </form>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>