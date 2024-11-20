document.addEventListener("DOMContentLoaded", () => {
    const modal = document.getElementById("email-modal");
    const closeButton = document.querySelector(".close-button");
    const sendEmailButtons = document.querySelectorAll(".send-email-button");
    const recipientInput = document.getElementById("recipient");
    const messageInput = document.getElementById("message");
    const namePlaceholder = "[Nombre]";

    sendEmailButtons.forEach(button => {
        button.addEventListener("click", () => {
            const email = button.dataset.email;
            const name = button.dataset.name;
            recipientInput.value = email;
            messageInput.value = messageInput.value.replace(namePlaceholder, name);
            modal.classList.add("active");
        });
    });

    closeButton.addEventListener("click", () => {
        modal.classList.remove("active");
    });

    document.getElementById("email-form").addEventListener("submit", (event) => {
        event.preventDefault();
        alert(`Correo enviado a: ${recipientInput.value}`);
        modal.classList.remove("active");
    });
});
