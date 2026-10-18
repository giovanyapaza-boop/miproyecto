const formulario = document.querySelector('.formulario-contacto');
const mensajeError = document.getElementById('mensaje-error');

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

    const nombre = document.getElementById('nombre').value.trim();
    const correo = document.getElementById('correo').value.trim();
    const asunto = document.getElementById('asunto').value;
    const mensaje = document.getElementById('mensaje').value.trim();

    const errores = [];

    if (nombre === '') {
        errores.push('Falta llenar el nombre.');
    }

    const regexCorreo = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (correo === '') {
        errores.push('Falta llenar el correo.');
    } else if (!regexCorreo.test(correo)) {
        errores.push('El correo no es válido.');
    }

    if (asunto === '') {
        errores.push('Falta seleccionar un asunto.');
    }

    if (mensaje === '') {
        errores.push('Falta llenar el mensaje.');
    }

    if (errores.length > 0) {
        mensajeError.innerHTML = errores.join('<br>');
        mensajeError.className = 'mensaje-error visible';
        return;
    }

    mensajeError.textContent = '✅ Mensaje enviado correctamente.';
    mensajeError.className = 'mensaje-error exito';
    formulario.reset();
});