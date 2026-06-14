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
  <div class="hero-texto">
    <p class="eyebrow">Plataforma para creadores colombianos</p>
    <h1>Tu arte<br><em>merece vivir de él.</em></h1>
    <p class="hero-desc">Descubre, encarga y apoya el talento creativo colombiano en un solo lugar.</p>
    <div class="hero-botones">
      <a href="registro-artista.php" class="btn-primary">Soy artista</a>
      <a href="obras.php" class="btn-secondary">Ver obras →</a>
    </div>
  </div>
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

</section>

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