# VendeArte

## Descripción
VendeArte es una plataforma web dirigida a artistas independientes, artesanos e ilustradores colombianos, inicialmente del pacífico colombiano en Buenaventura, que permite gestionar, promocionar y comercializar su trabajo creativo de forma profesional, mediante herramientas digitales accesibles como portafolio visual, sistema de encargos personalizados y calculadora de precios.

## Tecnologías utilizadas
- HTML5 — estructura de las vistas
- CSS3 — estilos y diseño visual (responsive con media queries)
- JavaScript — interactividad del lado del cliente
- PHP — lógica del servidor y procesamiento de datos
- MySQL (mysqli con consultas preparadas) — base de datos relacional
- XAMPP — entorno de desarrollo local

## Instrucciones de instalación y ejecución
1. Clona el repositorio: `git clone https://github.com/camilamontano/vendearte.git`
2. Copia la carpeta `VendeArte` dentro de: `C:/xampp/htdocs/`
3. Abre XAMPP y activa Apache y MySQL
4. Abre el navegador y entra a: `http://localhost/VendeArte/index.php`
5. Para la base de datos:
   - Abre `http://localhost/phpmyadmin`
   - Crea una base de datos llamada `vendearte`
   - Crea la tabla `contacto`:
     - `id` INT — AUTO_INCREMENT — PRIMARY KEY
     - `nombre` VARCHAR(100)
     - `correo` VARCHAR(150)
     - `mensaje` TEXT
   - Crea la tabla `usuarios` (para el login de administrador):
```sql
     CREATE TABLE usuarios (
         id INT AUTO_INCREMENT PRIMARY KEY,
         correo VARCHAR(150) UNIQUE NOT NULL,
         password VARCHAR(255) NOT NULL,
         rol VARCHAR(20) NOT NULL DEFAULT 'admin'
     );
```
   - Inserta un usuario admin (genera el hash con `password_hash()` en PHP, nunca guardes la contraseña en texto plano)
6. Crea manualmente la carpeta `uploads/` en la raíz del proyecto si no existe (está excluida del repositorio vía `.gitignore`, ya que contiene contenido subido por usuarios)

## Arquitectura del sistema

Cliente (Navegador)
│
▼
[Frontend] HTML + CSS + JavaScript
index.php → Página principal
calculadora.php → Calculadora de precios
contacto.php → Formulario de contacto
login.php → Acceso de administrador
admin.php → Panel de mensajes (protegido con sesión)
│
▼
[Backend] PHP
procesar.php → Recibe y guarda datos del formulario de contacto
verificar-login.php → Valida credenciales y crea sesión
logout.php → Cierra sesión
│
▼
[Base de datos] MySQL
Base de datos: vendearte
Tablas: contacto (id, nombre, correo, mensaje)
usuarios (id, correo, password, rol)


## Avance 2 — Funcionalidades implementadas
- CRUD completo de artistas (crear, ver, editar, eliminar)
- CRUD completo de obras (crear, ver, editar, eliminar)
- Panel de administración de mensajes
- Rediseño visual con tipografía Playfair Display
- Animaciones al hacer scroll con JavaScript

### Arquitectura actualizada — Avance 2
Tablas agregadas:
- `artistas` (id, nombre, especialidad, ciudad, correo, descripcion)
- `obras` (id, titulo, categoria, precio, descripcion)

Archivos nuevos:
- `registro-artista.php`, `guardar-artista.php`, `artistas.php`, `editar-artista.php`, `actualizar-artista.php`, `eliminar-artista.php`
- `registro-obra.php`, `guardar-obra.php`, `obras.php`, `editar-obra.php`, `actualizar-obra.php`, `eliminar-obra.php`

## PMV3 — Funcionalidades implementadas
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
- `nav.php` → nav reutilizable
- `footer.php` → footer reutilizable
- `uploads/` → carpeta de imágenes

## Correcciones de calidad y seguridad
A partir de la retroalimentación del avance anterior, se realizaron las siguientes correcciones:

- **Calculadora de precios:** se corrigió un bug que sumaba la base dos veces, inflando el precio sugerido.
- **Enlaces rotos:** se corrigieron enlaces a `artistas.html` y `obras.html` (ahora `.php`) en páginas que no usaban el nav reutilizable; esas páginas se migraron a `include 'nav.php'`.
- **Seguridad — inyección SQL:** todas las consultas que reciben datos del usuario (formularios de registro, edición y eliminación de artistas/obras, y contacto) fueron migradas de `mysqli_query` con concatenación directa a `mysqli_prepare` con parámetros vinculados.
- **Seguridad — autenticación:** se agregó tabla `usuarios` con contraseñas encriptadas (`password_hash`), y un sistema de login (`login.php`, `verificar-login.php`, `logout.php`) que protege `admin.php` mediante sesiones PHP.
- **`.gitignore`:** se excluyó la carpeta `uploads/` del control de versiones, ya que contiene contenido generado por los usuarios (fotos de artistas y obras), no código del proyecto.
- **`TEST_CASES.md`:** se documentaron 20 casos de prueba de los flujos reales del proyecto, incluyendo los bugs encontrados y corregidos durante esta entrega.

## Funcionalidades planificadas
- Vistas diferenciadas de usuario y administrador
- Registro de usuarios artistas/clientes
- Sistema de encargos completo
- Pasarela de pagos local
- Aplicación móvil

## Demo PMV3
Video de demostración: https://youtu.be/E2JF0nzRu7Y

## Desarrolladora
Camila Montaño — SENA · Análisis y Desarrollo de Software · 2026

