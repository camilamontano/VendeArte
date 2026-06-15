<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM obras LIMIT 4";
$obras = mysqli_query($conexion, $sql);
$sql_artistas = "SELECT * FROM artistas LIMIT 4";
$artistas = mysqli_query($conexion, $sql_artistas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>VendeArte</title>
</head>
<body>
  <nav>
  <div class="logo">
    <a href="index.html">Vende<span style="color:#C84E31;font-style:italic;">Arte</span></a>
  </div>
  <ul class="menu">
    <li><a href="artistas.php">Artistas</a></li>
    <li><a href="obras.php">Obras</a></li>
    <li><a href="calculadora.php">Calculadora</a></li>
    <li><a href="contacto.php">Contacto</a></li>
    <li><a href="registro-artista.php" class="btn-nav">Soy artista</a></li>
  </ul>
</nav>
   <section class="hero">
  <div class="brush brush1"></div>
  <div class="brush brush2"></div>
  <div class="brush brush3"></div>

 
  <div class="hero-texto">
    <p class="eyebrow">Plataforma para creadores colombianos</p>
    <h1>Tu arte<br><em>merece vivir de él.</em></h1>
    <p class="hero-desc">Descubre, encarga y apoya el talento creativo colombiano en un solo lugar.</p>
    <div class="hero-botones">
      <a href="registro-artista.php" class="btn-primary">Soy artista</a>
      <a href="obras.php" class="btn-ver-mas">Ver obras →</a>
    </div>
    <div class="hero-stats">
  <div class="stat">
    <span class="stat-numero">120+</span>
    <span class="stat-label">Artistas</span>
  </div>
  <div class="stat">
    <span class="stat-numero">500+</span>
    <span class="stat-label">Obras</span>
  </div>
  <div class="stat">
    <span class="stat-numero">50+</span>
    <span class="stat-label">Ventas</span>
  </div>
</div>
  </div>

  
 <div class="collage">
  <div class="col-masonry">
    <img src="uploads/obra1.jpg" class="obra">
    <img src="uploads/obra3.jpg" class="obra">
  </div>
  <div class="col-masonry">
    <img src="uploads/obra2.jpg" class="obra delay1">
    <img src="uploads/obra4.jpg" class="obra delay1">
  </div>
  <div class="col-masonry">
    <img src="uploads/obra5.jpg" class="obra delay2">
    <img src="uploads/obra6.jpg" class="obra delay2">
  </div>
</div>

</section>
</section>

   <section class="obras-destacadas">
  <div class="seccion-header">
    <p class="eyebrow">Colección</p>
    <h2>Obras destacadas</h2>
    <p class="seccion-desc">Piezas únicas creadas por artistas colombianos</p>
  </div>

  <div class="obras-grid">
    <?php while($obra = mysqli_fetch_assoc($obras)) { ?>
      <div class="card-obra">
        <img src="uploads/<?php echo $obra['imagen']; ?>" alt="<?php echo $obra['titulo']; ?>">
        <div class="overlay">
          <div class="overlay-content">
            <span class="categoria"><?php echo $obra['categoria']; ?></span>
            <h3><?php echo $obra['titulo']; ?></h3>
            <div class="overlay-footer">
              <span class="precio">$<?php echo number_format($obra['precio'], 0, ',', '.'); ?></span>
              <a href="obras.php" class="btn-overlay">Ver obra</a>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="ver-mas">
    <a href="obras.php" class="btn-ver-mas">Ver más obras →</a>

  </div>
</section>

</section>
<section class="sobre-nosotros">
  <div class="mosaico">
    
    <div class="mosaic-texto">
      <p class="eyebrow">Sobre nosotros</p>
      <h2>"Donde el talento creativo se convierte en sustento real."</h2>
      <p>VendeArte conecta artistas colombianos con amantes del arte. Un espacio donde el talento creativo se convierte en sustento real.</p>
    </div>

    <div class="mosaic-item item1">
      <h4>Vitrina</h4>
      <p>Tu perfil profesional siempre activo.</p>
    </div>

    <div class="mosaic-item item2">
      <h4>Encargos</h4>
      <p>Sin caos ni mensajes perdidos.</p>
    </div>

    <div class="mosaic-item item3">
      <h4>Precios justos</h4>
      <p>Cobra lo que realmente vale tu trabajo.</p>
    </div>

    <div class="mosaic-item item4">
      <h4>Comunidad</h4>
      <p>Conecta con otros creadores colombianos.</p>
    </div>

  </div>
</section>



<section class="artistas-destacados">
  <div class="seccion-header">
    <p class="eyebrow">Creadores</p>
    <h2>Artistas destacados</h2>
    <p class="seccion-desc">Talento colombiano que transforma el arte en vida</p>
  </div>

  <div class="artistas-grid">
    <?php while($artista = mysqli_fetch_assoc($artistas)) { ?>
      <div class="card-artista">
        
        <div class="artista-fondo">
          <img src="uploads/<?php echo $artista['imagen_fondo']; ?>" alt="obra">
        </div>

        <div class="artista-info">
          <img src="uploads/<?php echo $artista['foto']; ?>" class="artista-foto" alt="<?php echo $artista['nombre']; ?>">
          <h3><?php echo $artista['nombre']; ?></h3>
          <p><?php echo $artista['especialidad']; ?></p>
        </div>

        <div class="artista-overlay">
          <h3><?php echo $artista['nombre']; ?></h3>
          <p><?php echo $artista['especialidad']; ?></p>
          <p><?php echo $artista['descripcion']; ?></p>
          <a href="artistas.php" class="btn-overlay">Ver perfil</a>
        </div>

      </div>
    <?php } ?>
  </div>
</section>

<section class="cta">
  <h2>¿Eres artista o creador?</h2>
  <p>Publica tu trabajo, recibe ofertas y vive de tu talento.</p>
  <a href="registro-artista.php" class="btn-primary">Crear mi perfil gratis</a>
</section>



<footer>
  <div class="footer-grid">

    <!-- Columna 1 - Logo y redes -->
    <div class="footer-col footer-brand">
      <a href="index.php" class="footer-logo">Vende<span>Arte</span></a>
      <p class="footer-desc">Tu arte merece vivir de él. Plataforma para creadores colombianos independientes.</p>
      <div class="redes">
        <a href="#" class="red-social">
          <span class="red-icono">f</span>
          <span class="red-info">
            <span class="red-nombre">Facebook</span>
            <span class="red-cuenta">@VendeArte.co</span>
          </span>
        </a>
        <a href="#" class="red-social">
          <span class="red-icono">ig</span>
          <span class="red-info">
            <span class="red-nombre">Instagram</span>
            <span class="red-cuenta">@vendearte.co</span>
          </span>
        </a>
        <a href="#" class="red-social">
          <span class="red-icono">tt</span>
          <span class="red-info">
            <span class="red-nombre">TikTok</span>
            <span class="red-cuenta">@vendearte</span>
          </span>
        </a>
      </div>
    </div>

    <!-- Columna 2 - Explorar -->
    <div class="footer-col">
      <h4>Explorar</h4>
      <ul>
        <li><a href="obras.php">Obras</a></li>
        <li><a href="artistas.php">Artistas</a></li>
        <li><a href="calculadora.php">Calculadora</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </div>

    <!-- Columna 3 - Servicios -->
    <div class="footer-col">
      <h4>Servicios</h4>
      <ul>
        <li><a href="#">Encargos personalizados</a></li>
        <li><a href="#">Métodos de pago</a></li>
        <li><a href="#">Registro de artistas</a></li>
        <li><a href="#">Comunidad creativa</a></li>
      </ul>
    </div>

    <!-- Columna 4 - Legal -->
    <div class="footer-col">
      <h4>Legal</h4>
      <ul>
        <li><a href="#">Términos y condiciones</a></li>
        <li><a href="#">Política de privacidad</a></li>
        <li><a href="#">Cookies</a></li>
      </ul>
    </div>

  </div>

  <!-- Newsletter y pagos -->
  <div class="footer-middle">
    <div class="newsletter">
      <h4>Recibe novedades</h4>
      <p>Obras nuevas, artistas y noticias del arte colombiano.</p>
      <div class="newsletter-form">
        <input type="email" placeholder="Tu correo electrónico">
        <button>Suscribirme</button>
      </div>
    </div>
    <div class="pagos">
      <h4>Métodos de pago</h4>
      <div class="pagos-grid">
        <span class="pago-tag">Nequi</span>
        <span class="pago-tag">PSE</span>
        <span class="pago-tag">Bancolombia</span>
        <span class="pago-tag">Daviplata</span>
        <span class="pago-tag">Efecty</span>
      </div>
    </div>
  </div>

  <!-- Opinión -->
  <div class="footer-opinion">
   <div class="footer-confianza">
  <div class="confianza-item">
    <span class="confianza-numero">4.8</span>
    <div class="confianza-info">
      <div class="estrellas">⭐⭐⭐⭐⭐</div>
      <span>120 reseñas verificadas</span>
    </div>
  </div>
  <div class="confianza-item">
    <span class="confianza-icono">✓</span>
    <div class="confianza-info">
      <span class="confianza-titulo">Plataforma segura</span>
      <span>Pagos protegidos</span>
    </div>
  </div>
  <div class="confianza-item">
    <span class="confianza-icono">🇨🇴</span>
    <div class="confianza-info">
      <span class="confianza-titulo">Hecho en Colombia</span>
      <span>Para artistas colombianos</span>
    </div>
  </div>
</div>
  <!-- Copyright -->
  <div class="footer-bottom">
    <p>© 2025 VendeArte · Hecho con ❤️ en Colombia 🇨🇴</p>
    <p>Todos los derechos reservados</p>
  </div>

</footer>







    <script src="js/main.js"></script>

</body>







</html>