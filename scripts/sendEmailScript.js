document.addEventListener("DOMContentLoaded", function () {
    const emailButtons = document.querySelectorAll(".send-email-button");

    emailButtons.forEach(button => {
        button.addEventListener("click", function () {
            const email = button.getAttribute("data-email");
            const name = button.getAttribute("data-name");

            fetch("../php/admin/send_email.php", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ email, name })
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    alert("Correo enviado exitosamente.");
                } else {
                    alert("Error al enviar el correo: " + data.message);
                }
            })
            .catch(error => console.error("Error:", error));
        });
    });
});

