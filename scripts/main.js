document.addEventListener('DOMContentLoaded', function() {
    const chatContainer = document.getElementById('chat-container');
    const whatsappBtn = document.getElementById('whatsapp-btn');

    chatContainer.style.display = 'none';

    whatsappBtn.addEventListener('click', function() {
        if (chatContainer.style.display === 'none' || chatContainer.style.display === '') {
            chatContainer.style.display = 'block';  
            chatContainer.scrollIntoView({ behavior: 'smooth' });
        } else {
            chatContainer.style.display = 'none';  
        }
    });
});
