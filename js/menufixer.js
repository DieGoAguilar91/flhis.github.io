
// JavaScript para mostrar la barra de navegación al deslizar hacia abajo
window.addEventListener('scroll', function() {
    const menu = document.querySelector('.menu ');
    if (window.scrollY >= 500) {
        menu.classList.add('mostrar');
    } else {
        menu.classList.remove('mostrar');
    }
});

window.addEventListener('scroll', function() {
    const ocultar = document.querySelector('.mensaje-auto');
    if (window.scrollY >= 500) {
        ocultar.classList.add('ocultar');
    } else {
        ocultar.classList.remove('ocultar');
    }
});

window.addEventListener('scroll', function() {
    const ocultar = document.querySelector('.encabezado1');
    if (window.scrollY >= 500) {
        ocultar.classList.add('ocultar');
    } else {
        ocultar.classList.remove('ocultar');
    }
});
    window.addEventListener('scroll', function() {
    const ocultar = document.querySelector('.redes');
    if (window.scrollY >= 500) {
        ocultar.classList.add('ocultar');
    } else {
        ocultar.classList.remove('ocultar');
    }
});