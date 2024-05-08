
// Array con los mensajes
const mensajes = [
    "✅ Envíos GRATIS en Tunja capital a partir de $10.000",
    " Entrega en 24 o 48 horas 🛵"
];

// Elemento del DOM para mostrar el mensaje
const mensajeElement = document.getElementById("mensaje");

// Índice actual del mensaje
let indiceMensaje = 0;

// Función para cambiar el mensaje cada 5 segundos
function cambiarMensaje() {
    // Aplica la transición de difuminado al ocultar
    mensajeElement.style.opacity = "0";

    setTimeout(() => {
        // Cambia el mensaje
        mensajeElement.textContent = mensajes[indiceMensaje];

        // Incrementa el índice (circular)
        indiceMensaje = (indiceMensaje + 1) % mensajes.length;

        // Aplica la transición de difuminado al mostrar
        mensajeElement.style.opacity = "1";
    }, 1000);
}

// Inicializa el cambio de mensajes
cambiarMensaje();
setInterval(cambiarMensaje, 5000); // Cambia cada 5 segundos
