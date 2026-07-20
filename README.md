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

# Avance 2 — Funcionalidades implementadas
- CRUD completo de artistas (crear, ver, editar, eliminar)
- CRUD completo de obras (crear, ver, editar, eliminar)
- Panel de administración de mensajes
- Rediseño visual con tipografía Playfair Display
- Animaciones al hacer scroll con JavaScript

# Funcionalidades planificadas
- Login y registro de usuarios
- Subida de imágenes al portafolio
- Sistema de encargos completo
- Pasarela de pagos local
- Aplicación móvil

# Arquitectura actualizada — Avance 2
Tablas agregadas:
- `artistas` (id, nombre, especialidad, ciudad, correo, descripcion)
- `obras` (id, titulo, categoria, precio, descripcion)

Archivos nuevos:
- registro-artista.php → formulario registro
- guardar-artista.php  → guarda en BD
- artistas.php         → lista artistas
- editar-artista.php   → formulario edición
- actualizar-artista.php → guarda cambios
- eliminar-artista.php → elimina registro
- registro-obra.php    → formulario obra
- guardar-obra.php     → guarda en BD
- obras.php            → lista obras
- editar-obra.php      → formulario edición
- actualizar-obra.php  → guarda cambios
- eliminar-obra.php    → elimina registro

##  PMV3 — Funcionalidades implementadas

### Nuevas funcionalidades
- Registro completo de artistas con foto, imagen de portada, redes sociales, especialidades, información de ventas y términos
- Subida de imágenes para artistas y obras
- Galería de obras estilo masonry con efecto overlay
- Buscador y filtros por especialidad y ciudad en artistas
- Buscador y filtros por categoría en obras
- Calculadora de precios con desglose detallado y consejos
- Diseño responsivo para móvil y tablet
- Mensajes de éxito y error en todos los formularios
- Nav y footer reutilizables con include PHP
- Rediseño completo del frontend — paleta beige/terracota, Playfair Display + Montserrat
- Collage flotante animado en el hero
- Sección "Sobre nosotros" con mosaico asimétrico
- Sección artistas destacados con overlay en index
- CTA y footer profesional con newsletter, pagos y confianza

### Arquitectura actualizada — PMV3
Tablas actualizadas:
- `artistas` — agregadas columnas: foto, imagen_fondo, telefono, instagram, facebook, tiktok, encargos, entrega, precio_min, precio_max
- `obras` — agregada columna: imagen

Archivos nuevos:
- nav.php → nav reutilizable
- footer.php → footer reutilizable
- uploads/ → carpeta de imágenes

## Demo PMV3
Video de demostración: https://youtu.be/E2JF0nzRu7Y

## Desarrolladora
Camila Montaño — SENA · Análisis y Desarrollo de Software · 2026

