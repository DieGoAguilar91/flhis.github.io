const textos = ['Productos del Campo', 'Frescura y Calidad ', 'Los Mejores Productos '];
let indiceTexto = 0;
let indiceLetra = 0;
let actualTexto = '';
let estaBorrando = false;

function efectoMaquinaDeEscribir() {
let elemento = document.getElementById('texto-bienvenida');
if (estaBorrando) {
  actualTexto = textos[indiceTexto].substring(0, actualTexto.length - 1);
} else {
  actualTexto = textos[indiceTexto].substring(0, indiceLetra + 1);
}

elemento.textContent = actualTexto;

if (!estaBorrando && actualTexto === textos[indiceTexto]) {
  estaBorrando = true;
  setTimeout(efectoMaquinaDeEscribir, 2000);
} else if (estaBorrando && actualTexto === '') {
  estaBorrando = false;
  indiceTexto = (indiceTexto + 1) % textos.length;
  indiceLetra = 0;
  setTimeout(efectoMaquinaDeEscribir, 500);
} else {
  indiceLetra = estaBorrando ? indiceLetra - 1 : indiceLetra + 1;
  setTimeout(efectoMaquinaDeEscribir, estaBorrando ? 100 : 150);
}
}

document.addEventListener('DOMContentLoaded', efectoMaquinaDeEscribir);