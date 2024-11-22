document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.send-email-button').forEach(button => {
        button.addEventListener('click', () => {
            const email = button.dataset.email;
            const name = button.dataset.name;

            fetch('../php/admin/send_email.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({ email, name })
            })
            .then(response => response.text())
            .then(data => alert(data))
            .catch(error => console.error('Error:', error));
        });
    });
});
