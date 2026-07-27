<?php
$conexion = mysqli_connect("localhost", "root", "", "vendearte");
$sql = "SELECT * FROM obras";
$resultado = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Obras - VendeArte</title>
</head>
<body>

<?php include 'nav.php'; ?>

<section class="pagina-header">
  <p class="eyebrow">Galería</p>
  <h1>Obras disponibles</h1>
  <p class="seccion-desc">Arte colombiano único, hecho a mano por creadores independientes</p>
  <a href="registro-obra.php" class="btn-primary"> Publicar mi obra</a>
</section>

<?php if(isset($_GET['msg']) && $_GET['msg'] == 'eliminado'): ?>
  <div class="alerta alerta-exito">✓ Obra eliminada correctamente</div>
<?php endif; ?>

<!-- Buscador -->
<section class="buscador">
  <input type="text" id="buscar-obra" placeholder="Buscar obra...">
  <select id="filtro-categoria">
    <option value="">Todas las categorías</option>
    <option value="Pintura">Pintura</option>
    <option value="Escultura">Escultura</option>
    <option value="Tejido">Tejido</option>
    <option value="Ilustración">Ilustración</option>
    <option value="Fotografía">Fotografía</option>
    <option value="Cerámica">Cerámica</option>
  </select>
  <button onclick="filtrarObras()" class="btn-buscar">Buscar</button>
</section>

<!-- Galería -->
<section class="obras-pagina">
  <div class="obras-masonry" id="obras-container">
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
      <div class="card-obra-galeria"
           data-titulo="<?php echo strtolower($fila['titulo']); ?>"
           data-categoria="<?php echo strtolower($fila['categoria']); ?>">
        <img src="uploads/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['titulo']; ?>">
        <div class="overlay">
          <div class="overlay-content">
            <span class="categoria"><?php echo $fila['categoria']; ?></span>
            <h3><?php echo $fila['titulo']; ?></h3>
            <p><?php echo $fila['descripcion']; ?></p>
            <div class="overlay-footer">
              <span class="precio">$<?php echo number_format($fila['precio'], 0, ',', '.'); ?></span>
              <div class="obra-acciones">
                <a href="editar-obra.php?id=<?php echo $fila['id']; ?>" class="btn-editar">Editar</a>
                <a href="eliminar-obra.php?id=<?php echo $fila['id']; ?>" class="btn-eliminar" onclick="return confirm('¿Eliminar esta obra?')">Eliminar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</section>

<?php mysqli_close($conexion); ?>

<script>
function filtrarObras() {
  const texto = document.getElementById('buscar-obra').value.toLowerCase();
  const categoria = document.getElementById('filtro-categoria').value.toLowerCase();

  document.querySelectorAll('.card-obra-galeria').forEach(card => {
    const titulo = card.dataset.titulo;
    const cat = card.dataset.categoria;

    const coincide =
      (texto === '' || titulo.includes(texto)) &&
      (categoria === '' || cat.includes(categoria));

    card.style.display = coincide ? 'block' : 'none';
  });
}
</script>

<?php include 'footer.php'; ?>
</body>
</html>