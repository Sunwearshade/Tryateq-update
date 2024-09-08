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

    const response = generateResponse(userInput);
    setTimeout(() => addMessage(response, 'bot-message'), 500);
}

function addMessage(text, className) {
    const messageContainer = document.createElement('div');
    messageContainer.className = `message ${className}`;
    messageContainer.textContent = text;

    const chatOutput = document.getElementById('chat-output');
    chatOutput.appendChild(messageContainer);
    chatOutput.scrollTop = chatOutput.scrollHeight;
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
        "gracias": "¡De nada! Si tienes alguna otra pregunta, no dudes en preguntar.",
        "adiós": "¡Hasta luego! Estamos aquí si necesitas más ayuda.",
        // Añadir más respuestas predefinidas aquí
    };

    const defaultResponse = "Lo siento, no entiendo la pregunta. ¿Puedes reformularla?";

    if (input.toLowerCase() === "finalizar") {
        chatActive = false;
    }

    return responses[input.toLowerCase()] || defaultResponse;
}
