# TEST_CASES — VendeArte

| ID | Criterio evaluado | Resultado esperado | Resultado obtenido | Estado |
|---|---|---|---|---|
| TC01 | Registro de artista con foto | Artista guardado en BD con imagen y redirige a registro-artista.php?msg=exito | Artista guardado correctamente con imagen | Pass |
| TC02 | Formulario de contacto | Mensaje guardado en BD y muestra alerta de éxito | Mensaje guardado y alerta visible | Pass |
| TC03 | Calculadora de precios | Calcula precio con desglose al ingresar valores | Precio y desglose calculados correctamente | Pass |
| TC04 | Eliminar artista | Artista eliminado de BD y desaparece de artistas.php | Artista eliminado correctamente | Pass |
| TC05 | Editar obra | Cambios guardados en BD y se reflejan en obras.php | Obra actualizada correctamente | Pass |
| TC06 | Ver obras destacadas en index | Index muestra 4 obras desde la BD con overlay | Obras cargadas desde BD con efecto overlay | Pass |
| TC07 | Ver artistas destacados en index | Index muestra 4 artistas desde la BD con overlay | Artistas cargados desde BD con efecto overlay | Pass |
| TC08 | Buscador de artistas | Filtra artistas por nombre y especialidad | Filtro funciona en tiempo real | Pass |
| TC09 | Buscador de obras | Filtra obras por título y categoría | Filtro funciona al hacer clic en buscar | Pass |
| TC10 | Registro artista con campos vacíos | Muestra validación HTML required | Campos requeridos bloquean el envío | Pass |
| TC11 | Calculadora sin datos | Muestra alerta pidiendo ingresar datos | Alerta visible al hacer clic sin datos | Pass |
| TC12 | Navegación entre páginas | Nav lleva correctamente a cada sección | Todos los links funcionan correctamente | Pass |
| TC13 | Responsive en móvil | La página se adapta a pantallas menores de 768px | Layout cambia correctamente en mobile | Pass |
| TC14 | Subida de imagen en obra | Imagen guardada en uploads/ y visible en galería | Imagen subida y mostrada correctamente | Pass |
| TC15 | Mensaje de error en contacto | Si hay error en BD muestra alerta de error | Alerta de error visible | Pass |