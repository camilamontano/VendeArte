# TEST_CASES — VendeArte

| ID | Criterio evaluado | Resultado esperado | Resultado obtenido | Estado |
|---|---|---|---|---|
| TC01 | Registro de artista con foto | Artista guardado en BD con imagen y redirige a registro-artista.php?msg=exito | Artista guardado correctamente con imagen | Pass |
| TC02 | Formulario de contacto | Mensaje guardado en BD y muestra alerta de éxito | Mensaje guardado y alerta visible | Pass |
| TC03 | Calculadora de precios | Calcula precio = (materiales + horas×valor_hora) × (1 + ganancia%) | Se detectó bug: la fórmula sumaba la base dos veces, inflando el resultado casi al doble. Corregido en commit f85558e. Verificado con materiales=$25.000, 4h, $15.000/h, 30% → resultado correcto $110.500 | Pass (corregido) |
| TC04 | Eliminar artista | Artista eliminado de BD y desaparece de artistas.php | Artista eliminado correctamente | Pass |
| TC05 | Editar obra | Cambios guardados en BD y se reflejan en obras.php | Obra actualizada correctamente | Pass |
| TC06 | Ver obras destacadas en index | Index muestra 4 obras desde la BD con overlay | Obras cargadas desde BD con efecto overlay | Pass |
| TC07 | Ver artistas destacados en index | Index muestra 4 artistas desde la BD con overlay | Artistas cargados desde BD con efecto overlay | Pass |
| TC08 | Buscador de artistas | Filtra artistas por nombre y especialidad | Filtro funciona en tiempo real | Pass |
| TC09 | Buscador de obras | Filtra obras por título y categoría | Filtro funciona al hacer clic en buscar | Pass |
| TC10 | Registro artista con campos vacíos | Muestra validación HTML required | Campos requeridos bloquean el envío | Pass |
| TC11 | Calculadora sin datos | Muestra alerta pidiendo ingresar datos | Alerta visible al hacer clic sin datos | Pass |
| TC12 | Navegación entre páginas | Nav lleva correctamente a cada sección | Se detectaron enlaces rotos a artistas.html y obras.html en index.html y otras páginas con nav copiado a mano. Corregido: enlaces actualizados a .php y páginas migradas a incluir nav.php de forma centralizada | Pass (corregido) |
| TC13 | Responsive en móvil | La página se adapta a pantallas menores de 768px | Media queries agregadas en css/style.css (breakpoints 768px y 480px) | Pass |
| TC14 | Subida de imagen en obra | Imagen guardada en uploads/ y visible en galería | Imagen subida y mostrada correctamente | Pass |
| TC15 | Mensaje de error en contacto | Si hay error en BD muestra alerta de error | Alerta de error visible | Pass |
| TC16 | Inyección SQL en formularios | Ingresar caracteres especiales (', --, OR 1=1) en campos de formulario no debe alterar ni dañar la base de datos | Consultas migradas a mysqli_prepare en procesar.php, guardar-artista.php, guardar-obra.php, eliminar-artista.php, eliminar-obra.php, actualizar-artista.php, actualizar-obra.php, editar-obra.php. Probado con comillas simples y comentarios SQL en campos de texto: no se altera la consulta | Pass |
| TC17 | Acceso a admin.php sin sesión iniciada | Redirige automáticamente a login.php | Redirección correcta a login.php | Pass |
| TC18 | Login con credenciales correctas | Redirige a admin.php y muestra mensajes de contacto | Acceso concedido correctamente | Pass |
| TC19 | Login con credenciales incorrectas | Regresa a login.php con mensaje de error | Mensaje "Correo o contraseña incorrectos" visible | Pass |
| TC20 | Cerrar sesión de admin | Destruye la sesión y redirige a login.php; admin.php vuelve a ser inaccesible | Sesión cerrada correctamente, admin.php redirige de nuevo a login.php | Pass |