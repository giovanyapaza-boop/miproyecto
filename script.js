const btnTema = document.getElementById('btn-tema');
const iconoTema = btnTema.querySelector('i');

btnTema.addEventListener('click', function () {
    document.body.classList.toggle('oscuro');

    if (document.body.classList.contains('oscuro')) {
        iconoTema.classList.replace('fa-moon', 'fa-sun');
        btnTema.setAttribute('aria-label', 'Activar modo claro');
    } else {
        iconoTema.classList.replace('fa-sun', 'fa-moon');
        btnTema.setAttribute('aria-label', 'Activar modo oscuro');
    }
});