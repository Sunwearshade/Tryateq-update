document.getElementById('send-btn').addEventListener('click', sendMessage);

let chatActive = true;
let sessionId = generateSessionId();

function sendMessage() {
    const userInput = document.getElementById('user-input').value;
    if (userInput.trim() === '') return;

    addMessage(userInput, 'user-message');
    document.getElementById('user-input').value = '';

    if (!chatActive) {
        addMessage("El chat ha finalizado. Tu ID de consulta es: " + sessionId, 'bot-message');
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
        "hola": "¡Hola! ¿Cómo puedo ayudarte hoy?",
        "¿cómo estás?": "Estoy bien, gracias por preguntar. ¿Y tú?",
        "¿cuál es tu nombre?": "Soy un modelo de IA creado para ayudarte con tus preguntas.",
        "¿Qué es un bot?": "es un sistema de respuesta automatizada",
        "¿Qué puedes hacer?": "cualquier respuesta que quieras como respuesta?",
        "gg": "papa",
        // Añadir más respuestas predefinidas aquí
    };

    const defaultResponse = "Lo siento, no entiendo la pregunta. ¿Puedes reformularla?";

    if (input.toLowerCase() === "finalizar") {
        chatActive = false;
    }

    return responses[input.toLowerCase()] || defaultResponse;
}

function generateSessionId() {
    return 'ID-' + Math.random().toString(36).substr(2, 9).toUpperCase();
}