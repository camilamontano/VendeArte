VendeArte

# Descripción
VendeArte es una plataforma web dirigida a artistas independientes, 
artesanos e ilustradores colombianos, inicialmente del pacifico colombiano
en Buenaventura que permite gestionar, promocionar 
y comercializar su trabajo creativo de forma profesional, mediante 
herramientas digitales accesibles como portafolio visual, sistema de 
encargos personalizados y calculadora de precios.

# Tecnologías utilizadas

- HTML5 — estructura de las vistas
- CSS3 — estilos y diseño visual
- JavaScript — interactividad del lado del cliente
- PHP — lógica del servidor y procesamiento de datos
- MySQL — base de datos relacional
- XAMPP — entorno de desarrollo local


# Instrucciones de instalación y ejecución

1. Clona el repositorio:
git clone https://github.com/camilamontano/vendearte.git

2. Copia la carpeta `VendeArte` dentro de:
C:/xampp/htdocs/

3. Abre XAMPP y activa **Apache** y **MySQL**

4. Abre el navegador y entra a:
http://localhost/VendeArte/index.html

5. Para la base de datos:
   - Abre `http://localhost/phpmyadmin`
   - Crea una base de datos llamada `vendearte`
   - Crea la tabla `contacto` con las columnas:
     - `id` INT — AUTO_INCREMENT — PRIMARY KEY
     - `nombre` VARCHAR(100)
     - `correo` VARCHAR(150)
     - `mensaje` TEXT


# Arquitectura del sistema
Cliente (Navegador)
│
▼
[Frontend]
HTML + CSS + JavaScript

index.html        → Página principal
calculadora.php   → Calculadora de precios
contacto.php      → Formulario de contacto
admin.php         → Panel de mensajes
│
▼
[Backend]
PHP
procesar.php      → Recibe y guarda datos del formulario
│
▼
[Base de datos]
MySQL
Base de datos: vendearte
Tabla: contacto
(id, nombre, correo, mensaje)
