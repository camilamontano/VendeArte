<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - VendeArte</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'nav.php'; ?>
    

   
<section class="formulario">
    <h2>Contáctanos</h2>
    <p>¿Tienes preguntas o quieres saber más sobre nuestros artistas y obras? ¡Estamos aquí para ayudarte! Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
     
    <form action="procesar.php" method="POST"> 
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <input type="email" name="email" placeholder="Tu correo electrónico" required>
        <textarea name="mensaje" placeholder="Tu mensaje" required></textarea>
        <button type="submit">Enviar mensaje</button>
    </form>
</section>
<?php include 'footer.php'; ?>
</body>
</html>