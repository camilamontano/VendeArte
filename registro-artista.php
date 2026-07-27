<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Ser Artista - VendeArte</title>
</head>
<body>

<?php include 'nav.php'; ?>

<section class="pagina-header">
  <p class="eyebrow">Únete</p>
  <h1>Conviértete en Artista</h1>
  <p class="seccion-desc">Comparte tu talento con miles de personas y comienza a vender tus obras.</p>
</section>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'exito'): ?>
  <div class="alerta alerta-exito">🎉 ¡Solicitud enviada! Nuestro equipo revisará tu perfil y te contactará pronto.</div>
<?php endif; ?>

<section class="formulario-pagina">
  <div class="formulario-card">
    <form action="guardar-artista.php" method="POST" enctype="multipart/form-data">

      <!-- INFORMACIÓN PERSONAL -->
      <div class="form-seccion">
        <h3>Información personal</h3>
        <div class="form-grid">
          <div class="form-grupo">
            <label>Nombre completo *</label>
            <input type="text" name="nombre" placeholder="Tu nombre completo" required>
          </div>
          <div class="form-grupo">
            <label>Nombre artístico</label>
            <input type="text" name="nombre_artistico" placeholder="Opcional">
          </div>
          <div class="form-grupo">
            <label>Correo electrónico *</label>
            <input type="email" name="correo" placeholder="Tu correo" required>
          </div>
          <div class="form-grupo">
            <label>Teléfono</label>
            <input type="tel" name="telefono" placeholder="Tu número">
          </div>
          <div class="form-grupo">
            <label>Ciudad *</label>
            <input type="text" name="ciudad" placeholder="Tu ciudad" required>
          </div>
          <div class="form-grupo">
            <label>Fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento">
          </div>
        </div>
      </div>

    
      <div class="form-seccion">
        <h3>Información del artista</h3>
        <div class="form-grupo">
          <label>Foto de perfil *</label>
          <input type="file" name="foto" accept="image/*" required>
        </div>
        <div class="form-grupo">
          <label>Foto de portada</label>
          <input type="file" name="imagen_fondo" accept="image/*">
        </div>
        <div class="form-grupo">
          <label>Biografía *</label>
          <textarea name="descripcion" placeholder="Cuéntanos sobre tu arte y proceso creativo" required></textarea>
        </div>
      </div>

      <div class="form-seccion">
        <h3>Especialidad</h3>
        <div class="form-checks">
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Pintura"> Pintura</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Dibujo"> Dibujo</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Ilustración Digital"> Ilustración Digital</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Acuarela"> Acuarela</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Escultura"> Escultura</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Fotografía"> Fotografía</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Arte Textil"> Arte Textil</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Crochet"> Crochet</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Arte Abstracto"> Arte Abstracto</label>
          <label class="check-item"><input type="checkbox" name="especialidades[]" value="Otro"> Otro</label>
        </div>
      </div>

  
      <div class="form-seccion">
        <h3>Redes sociales</h3>
        <div class="form-grid">
          <div class="form-grupo">
            <label>Instagram</label>
            <input type="text" name="instagram" placeholder="@tuusuario">
          </div>
          <div class="form-grupo">
            <label>Facebook</label>
            <input type="text" name="facebook" placeholder="@tuusuario">
          </div>
          <div class="form-grupo">
            <label>TikTok</label>
            <input type="text" name="tiktok" placeholder="@tuusuario">
          </div>
          <div class="form-grupo">
            <label>Página web</label>
            <input type="url" name="web" placeholder="https://tuweb.com">
          </div>
        </div>
      </div>

     
      <div class="form-seccion">
        <h3>Información de ventas</h3>
        <div class="form-grid">
          <div class="form-grupo">
            <label>¿Acepta encargos?</label>
            <select name="encargos">
              <option value="si">Sí</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="form-grupo">
            <label>Tiempo de entrega</label>
            <input type="text" name="entrega" placeholder="Ej: 2 semanas">
          </div>
          <div class="form-grupo">
            <label>Precio mínimo</label>
            <input type="number" name="precio_min" placeholder="$50.000">
          </div>
          <div class="form-grupo">
            <label>Precio máximo</label>
            <input type="number" name="precio_max" placeholder="$500.000">
          </div>
        </div>
      </div>

     
      <div class="form-seccion">
        <h3>Términos</h3>
        <div class="form-checks">
          <label class="check-item">
            <input type="checkbox" required> Confirmo que las obras son de mi autoría.
          </label>
          <label class="check-item">
            <input type="checkbox" required> Acepto los términos y condiciones.
          </label>
          <label class="check-item">
            <input type="checkbox" required> Acepto la política de privacidad.
          </label>
        </div>
      </div>

      <button type="submit" class="btn-submit">Solicitar ser artista</button>

    </form>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>