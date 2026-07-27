<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Calculadora de Precios - VendeArte</title>
</head>
<body>

<?php include 'nav.php'; ?>

<section class="pagina-header">
  <p class="eyebrow">Herramienta gratuita</p>
  <h1>Calculadora de precios</h1>
  <p class="seccion-desc">Descubre cuánto cobrar por tu trabajo de forma justa — cubriendo materiales, tiempo y ganancia.</p>
</section>

<section class="calc-pagina">
  <div class="calc-contenedor">

    <!-- Formulario -->
    <div class="calc-card">
      <h3>Ingresa los datos de tu obra</h3>

      <div class="calc-grupo">
        <label> Costo de materiales ($)</label>
        <input type="number" id="materiales" placeholder="Ej: 25000">
        <span class="calc-hint">Incluye todo lo que compraste para esta obra</span>
      </div>

      <div class="calc-grupo">
        <label> Horas de trabajo</label>
        <input type="number" id="horas" placeholder="Ej: 4">
        <span class="calc-hint">¿Cuántas horas tardaste en crearla?</span>
      </div>

      <div class="calc-grupo">
        <label> Valor de tu hora ($)</label>
        <input type="number" id="valorHora" placeholder="Ej: 15000">
        <span class="calc-hint">¿Cuánto vale una hora de tu tiempo?</span>
      </div>

      <div class="calc-grupo">
        <label> Ganancia esperada (%)</label>
        <input type="number" id="ganancia" placeholder="Ej: 30">
        <span class="calc-hint">Porcentaje adicional de ganancia</span>
      </div>

      <button onclick="calcularPrecio()" class="btn-calcular">Calcular precio justo</button>

      <div id="resultado" class="calc-resultado oculto">
        <p class="resultado-label">Precio sugerido para tu obra</p>
        <p class="resultado-valor" id="precio-valor"></p>
        <div class="resultado-desglose">
          <div class="desglose-item">
            <span>Materiales</span>
            <span id="d-materiales"></span>
          </div>
          <div class="desglose-item">
            <span>Mano de obra</span>
            <span id="d-mano"></span>
          </div>
          <div class="desglose-item">
            <span>Ganancia</span>
            <span id="d-ganancia"></span>
          </div>
        </div>
      </div>
    </div>

   
    <div class="calc-tips">
      <h3> Consejos para cobrar bien</h3>
      <div class="tip-item">
        <h4>No regales tu tiempo</h4>
        <p>Tu hora de trabajo tiene valor. Si no la cobras, estás trabajando gratis.</p>
      </div>
      <div class="tip-item">
        <h4>Incluye todos los materiales</h4>
        <p>Hilos, pinturas, lienzos, herramientas — todo cuenta.</p>
      </div>
      <div class="tip-item">
        <h4>Agrega ganancia siempre</h4>
        <p>Mínimo un 30% sobre el costo total para que tu negocio sea sostenible.</p>
      </div>
      <div class="tip-item">
        <h4>Investiga el mercado</h4>
        <p>Compara con otros artistas pero no bajes tu precio por competir.</p>
      </div>
      <div class="tip-item">
        <h4>El arte único tiene valor</h4>
        <p>Una obra hecha a mano no compite con producción masiva — vale más.</p>
      </div>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>

<script>
function calcularPrecio() {
  const mat = parseFloat(document.getElementById('materiales').value) || 0;
  const hrs = parseFloat(document.getElementById('horas').value) || 0;
  const hora = parseFloat(document.getElementById('valorHora').value) || 0;
  const gan = parseFloat(document.getElementById('ganancia').value) || 0;

  if (mat === 0 && hrs === 0) {
    alert('Por favor ingresa al menos el costo de materiales y las horas de trabajo.');
    return;
  }

  const manoObra = hrs * hora;
  const base = mat + manoObra;
  const gananciaValor = base * (gan / 100);
  const total = base + gananciaValor;

  document.getElementById('precio-valor').textContent = '$' + Math.round(total).toLocaleString('es-CO');
  document.getElementById('d-materiales').textContent = '$' + Math.round(mat).toLocaleString('es-CO');
  document.getElementById('d-mano').textContent = '$' + Math.round(manoObra).toLocaleString('es-CO');
  document.getElementById('d-ganancia').textContent = '$' + Math.round(gananciaValor).toLocaleString('es-CO');

  document.getElementById('resultado').classList.remove('oculto');
}
</script>

</body>
</html>