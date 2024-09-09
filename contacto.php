<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Tryateq</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/buttons.css">
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Mtec/php/insert_form.php';
    ?>

</head>
<body class="contact-page">
    <header class="header">
        <h1><a href="index.html">Tryateq</a></h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="soluciones.html">Soluciones</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main class="main-contact">
        <h2>Contáctanos</h2>
        <div class="contact-form-container">
            <form id="contact-form" class="contact-form" method="post" action="">
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="Enterprises">Empresa:</label>
                    <input type="Enterprises" id="Enterprises" name="Enterprises" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo:</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="phone">Número de Teléfono:</label>
                    <input type="tel" id="phone" name="phone" class="form-input" required>
                </div>
                <div class="form-group">
                    <label for="message">Tu objetivo/meta:</label>
                    <textarea id="message" name="message" class="form-textarea" required></textarea>
                </div>
                <button type="submit" class="submit-button" name="subirInfo">Enviar</button>
            </form>
            <!-- Mensaje de éxito fuera del formulario -->
            <div id="success-message" style="display: none;" class="hidden">
                <p>¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <p>Todos los derechos reservados Tryateq</p>
    </footer>
    <script src="scripts/menu.js"></script>

</body>
</html>