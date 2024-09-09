document.getElementById('send-btn').addEventListener('click', sendMessage);
document.getElementById('user-input').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
});

let chatActive = true;

function sendMessage() {
    const userInput = document.getElementById('user-input').value;
    if (userInput.trim() === '') return;

    addMessage(userInput, 'user-message');
    document.getElementById('user-input').value = '';

    if (!chatActive) {
        addMessage("El chat ha finalizado.", 'bot-message');
        return;
    }

    const typingIndicator = document.getElementById('typing-indicator');
    typingIndicator.classList.remove('hidden');

    setTimeout(() => {
        typingIndicator.classList.add('hidden');
        const response = generateResponse(userInput);
        setTimeout(() => addMessage(response, 'bot-message'), 500);
    }, 1000); 
}

function addMessage(text, className) {
    const messageContainer = document.createElement('div');
    messageContainer.className = `message ${className}`;

    const messageText = document.createElement('div');
    messageText.textContent = text;

    const messageTime = document.createElement('div');
    messageTime.className = 'message-time';
    messageTime.textContent = getCurrentTime();

    messageContainer.appendChild(messageText);
    messageContainer.appendChild(messageTime);

    const chatOutput = document.getElementById('chat-output');
    chatOutput.appendChild(messageContainer);
    chatOutput.scrollTop = chatOutput.scrollHeight;
}

function getCurrentTime() {
    const now = new Date();
    const hours = String(now.getHours()).padStart(2, '0');
    const minutes = String(now.getMinutes()).padStart(2, '0');
    return `${hours}:${minutes}`;
}

function generateResponse(input) {
    const responses = {
        "hola": "¡Hola! ¿En qué puedo asistirte hoy?",
        "¿cómo estás?": "Estoy aquí para ayudarte. ¿En qué necesitas ayuda?",
        "¿cuál es tu nombre?": "Soy un asistente virtual de [Nombre de la Empresa].",
        "¿qué es un bot?": "Un bot es un programa que puede responder a preguntas y ayudar con tareas comunes.",
        "¿qué servicios ofrecen?": "Ofrecemos soluciones de automatización y desarrollo de bots personalizados para negocios.",
        "¿cómo puedo contactarlos?": "Puedes contactarnos a través de nuestro formulario en línea o llamándonos al [número de teléfono].",
        "¿cuáles son sus horarios?": "Estamos disponibles de lunes a viernes de 9:00 AM a 6:00 PM.",
        "¿Cuál es el precio": "Cada proyecto es unico, contactanos para realizar una valoracion de acuerdo a tus necesidades",
        "Precio": "Cada proyecto es unico, contactanos para realizar una evaluacion de acuerdo a tus necesidades",
        "ok": "Espero haber sido de ayuda",
        "gracias": "¡De nada! Si tienes alguna otra pregunta, no dudes en preguntar.",
        "adiós": "¡Hasta luego! Estamos aquí si necesitas más ayuda.",
    };

    const defaultResponse = "Lo siento, no entiendo la pregunta. ¿Puedes reformularla?";

    if (input.toLowerCase() === "finalizar") {
        chatActive = false;
    }

    return responses[input.toLowerCase()] || defaultResponse;
}
