<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de precios - VendeArte</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/calcular.js"></script>
</head>
<body>
    
        <?php include 'nav.php'; ?>
       

<section class="calculadora">
    <h2>¿Cuánto cobrar por tu trabajo?</h2>
    <p>Utiliza nuestra calculadora de precios para obtener una estimación rápida de cuánto
        deberías cobrar por tu trabajo.</p>

        <div class ="calc-form">
            <label> Costo de materiales: ($)</label>
            <input type="number" id="materiales" placeholder="25000">

            <label> Horas de trabajo:</label>
            <input type="number" id="horas" placeholder="4">

            <label> Valor por hora: ($)</label>
            <input type="number" id="valorHora" placeholder="15000">

            <label> Ganancia esperada (%):</label>
            <input type="number" id="ganancia" placeholder="30">

            <button onclick="calcularPrecio()">Calcular precio</button>
            <div id="resultado"></div>
        </div>  
</section>
<?php include 'footer.php'; ?>
</body>
</html>