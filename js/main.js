const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
});

document.querySelectorAll('.card').forEach(card => {
  observer.observe(card);
});
// Buscador de artistas
const buscar = document.getElementById('buscar');
const filtroEspecialidad = document.getElementById('filtro-especialidad');
const filtroCity = document.getElementById('filtro-ciudad');

function filtrarArtistas() {
  const texto = buscar ? buscar.value.toLowerCase() : '';
  const especialidad = filtroEspecialidad ? filtroEspecialidad.value.toLowerCase() : '';
  const ciudad = filtroCity ? filtroCity.value.toLowerCase() : '';

  document.querySelectorAll('.card-artista-pagina').forEach(card => {
    const nombre = card.dataset.nombre.toLowerCase();
    const esp = card.dataset.especialidad.toLowerCase();
    const ciu = card.dataset.ciudad.toLowerCase();

    const coincide =
      (texto === '' || nombre.includes(texto) || esp.includes(texto)) &&
      (especialidad === '' || esp.includes(especialidad)) &&
      (ciudad === '' || ciu.includes(ciudad));

    card.style.display = coincide ? 'block' : 'none';
  });
}

if(buscar) buscar.addEventListener('input', filtrarArtistas);
if(filtroEspecialidad) filtroEspecialidad.addEventListener('change', filtrarArtistas);
if(filtroCity) filtroCity.addEventListener('change', filtrarArtistas);