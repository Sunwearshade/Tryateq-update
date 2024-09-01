document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Previene el envío del formulario de manera tradicional

    // Aquí deberías manejar el envío del formulario con AJAX o similar

    // Muestra el mensaje de éxito y oculta el formulario
    document.getElementById('contact-form').style.display = 'none';
    document.getElementById('success-message').style.display = 'block';
});
