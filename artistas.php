<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM artistas";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Artistas - VendeArte</title>
</head>
<body>

<?php include 'nav.php'; ?>

<section class="pagina-header">
  <p class="eyebrow">Comunidad</p>
  <h1>Nuestros artistas</h1>
  <p class="seccion-desc">Talento colombiano que transforma el arte en vida</p>
  <a href="registro-artista.php" class="btn-primary"> Registrarme como artista</a>
</section>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'eliminado'): ?>
  <div class="alerta alerta-exito">✓ Artista eliminado correctamente</div>
<?php endif; ?>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'error'): ?>
  <div class="alerta alerta-error">✗ Hubo un error al eliminar el artista</div>
<?php endif; ?>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'actualizado'): ?>
  <div class="alerta alerta-exito">✓ Artista actualizado correctamente</div>
<?php endif; ?>

<section class="buscador">
  <input type="text" id="buscar" placeholder="Buscar artista...">
  <select id="filtro-especialidad">
    <option value="">Todas las especialidades</option>
    <option value="Pintura">Pintura</option>
    <option value="Escultura">Escultura</option>
    <option value="Tejido">Tejido</option>
    <option value="Ilustración">Ilustración</option>
    <option value="Cerámica">Cerámica</option>
    
  </select>
  <select id="filtro-ciudad">
    <option value="">Todas las ciudades</option>
    <option value="Buenaventura">Buenaventura</option>
    <option value="Cali">Cali</option>
    <option value="Bogotá">Bogotá</option>
    <option value="Medellín">Medellín</option>
  </select>
  <button class="btn-buscar" id="btn-buscar">Buscar</button>
</section>

<section class="artistas-pagina">
  <div class="artistas-grid-pagina" id="artistas-container">
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
      <div class="card-artista-pagina"
           data-especialidad="<?php echo $fila['especialidad']; ?>"
           data-ciudad="<?php echo $fila['ciudad']; ?>"
           data-nombre="<?php echo $fila['nombre']; ?>">
        <div class="artista-fondo">
          <img src="uploads/<?php echo $fila['imagen_fondo']; ?>" alt="obra">
        </div>
        <div class="artista-info">
          <img src="uploads/<?php echo $fila['foto']; ?>" class="artista-foto" alt="<?php echo $fila['nombre']; ?>">
          <h3><?php echo $fila['nombre']; ?></h3>
          <p><?php echo $fila['especialidad']; ?> · <?php echo $fila['ciudad']; ?></p>
        </div>
       <div class="artista-overlay">
  <h3><?php echo $fila['nombre']; ?></h3>
  <p><?php echo $fila['especialidad']; ?></p>
  <p class="artista-desc"><?php echo $fila['descripcion']; ?></p>
  <?php if(!empty($fila['instagram'])): ?>
    <p> <?php echo $fila['instagram']; ?></p>
  <?php endif; ?>
  <?php if(!empty($fila['tiktok'])): ?>
    <p> <?php echo $fila['tiktok']; ?></p>
  <?php endif; ?>
  <?php if(!empty($fila['encargos']) && $fila['encargos'] == 'si'): ?>
    <p> Acepta encargos</p>
  <?php endif; ?>
  <?php if(!empty($fila['precio_min'])): ?>
    <p> Desde $<?php echo number_format($fila['precio_min'], 0, ',', '.'); ?></p>
  <?php endif; ?>
  <a href="mailto:<?php echo $fila['correo']; ?>" class="btn-overlay">Contactar</a>
</div>
      </div>
    <?php } ?>
  </div>
</section>

<?php mysqli_close($conexion); ?>
<?php include 'footer.php'; ?>
