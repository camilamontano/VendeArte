<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM obras LIMIT 4";
$obras = mysqli_query($conexion, $sql);
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








    <section class="artistas">
    <h2>Artistas Destacados</h2>

    <div class="cards">

    <div class="card">
        <h3>Camila Montaño</h3>
        <p>Artista colombiana especializada en pintura abstracta  · Buenaventura </p>
        <p>desde $85.000</p>
        <button>Ver perfil</button>
    </div>
    
    <div class="card">
        <h3>Diego Restrepo</h3>
        <p>Artista colombiano especializado en escultura  · Cali </p>
        <p>desde $120.000</p>
        <button>Ver perfil</button>
    </div>

    <div class="card">
        <h3>Calcifer</h3>
        <p>Artista colombiana especializada en barcos tallados en madera  · Buenaventura </p>
        <p>desde $150.000</p>
        <button>Ver perfil</button>
    </div>

    <div class="card">
        <h3>Andrea Torres</h3>
        <p>Tejido Artesanal  · Buenaventura </p>
        <p>desde $40.000</p>
        <button>Ver perfil</button>
    </div>

    </div>
    </section>
    <script src="js/main.js"></script>

</body>







</html>