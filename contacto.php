<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Tryateq</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/buttons.css">
    <script src="scripts/contact-form.js"></script>
    <?php
        // Generar el token CSRF si no existe
        session_start();
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    ?>
</head>
<body class="contact-page">
    <header class="header">
        <h1><a href="index.html">Tryateq</a></h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="index.html">Inicio</a></li>
                <li><a href="soluciones.html">Servicios</a></li>
                <li><a href="servicios.html">soluciones</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-contact">
        <h2>Contáctanos</h2>
        <div class="contact-form-container">
            <form id="contact-form" class="contact-form" method="post" onsubmit="subirFormulario(event)">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="Enterprises">Empresa:</label>
                    <input type="text" id="Enterprises" name="Enterprises" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="phone">Número de Teléfono:</label>
                    <input type="tel" id="phone" name="phone" class="form-input" pattern="^[0-9]{10}$" required>
                </div>
                <div class="form-group">
                    <label for="message">Tu objetivo/meta:</label>
                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                </div>
                <button type="submit" class="submit-button">Enviar</button>
            </form>
            <div id="success-message" class="whatsapp-message">
        <p>¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.</p>
        <div class="whatsapp-checks">
            <img src="./images/palomitas.png" alt="Palomitas">
        </div> 
    </div>
        </div>
    </main>

    <footer class="footer">
        <p>Todos los derechos reservados Tryateq</p>
    </footer>
</body>
</html>
