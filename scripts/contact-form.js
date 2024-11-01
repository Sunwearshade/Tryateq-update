function subirFormulario(event) {
    event.preventDefault(); // Evitar que el formulario se envíe de forma tradicional

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
            document.getElementById('success-message').style.display = "block";
        }
    })
    .catch(error => {
        console.error('Error al guardar:', error);
    });
}

