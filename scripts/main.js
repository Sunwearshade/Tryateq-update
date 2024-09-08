document.getElementById('whatsapp-btn').addEventListener('click', function() {
    const chatContainer = document.getElementById('chat-container');
    if (chatContainer.style.display === 'none') {
        chatContainer.style.display = 'block';  
    } else {
        chatContainer.style.display = 'none';  
    }
});
