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
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="artistas.html">Artistas</a></li>
            <li><a href="obras.html">Obras</a></li>
            <li><a href="Calculadora.php">Calculadora de precios</a></li> 
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>


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
</body>
</html>