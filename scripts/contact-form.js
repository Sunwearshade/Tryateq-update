document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar recargar la página al enviar el formulario

    // Ocultar el formulario
    document.getElementById("contact-form").style.display = "none";

    // Mostrar el mensaje de éxito
    document.getElementById("success-message").classList.remove("hidden");
});
