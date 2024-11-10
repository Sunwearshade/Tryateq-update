function subirFormulario(event) {
    event.preventDefault();

    const nombre = document.getElementById('name').value.trim();
    const empresa = document.getElementById('Enterprises').value.trim();
    const correo = document.getElementById('email').value.trim();
    const telefono = document.getElementById('phone').value.trim();
    const objetivo = document.getElementById('message').value.trim();
    const csrfToken = document.querySelector('input[name="csrf_token"]').value;

    const formData = new FormData();
    formData.append('subirInfo', true);
    formData.append('nombre', nombre);
    formData.append('empresa', empresa);
    formData.append('correo', correo);
    formData.append('telefono', telefono);
    formData.append('objetivo', objetivo);
    formData.append('csrf_token', csrfToken);

    fetch('./php/insert_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            console.error(data.error);
            alert(data.error);
        } else {
            document.getElementById('contact-form').style.display = "none";

            const sentMessage = document.getElementById('sent-message');
            sentMessage.style.display = "block";

            setTimeout(() => {
                document.getElementById('success-message').style.display = "block"; 
                document.getElementById('check-icon').src = './images/palomitas.png';

                // Reproducir el sonido de notificación
                const audio = new Audio('./sounds/notification.mp3');
                audio.play();

            }, 1000);
        }
    })
    .catch(error => {
        console.error('Error al guardar:', error);
    });
}
