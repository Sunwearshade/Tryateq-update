<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Registros de Contacto - Tryateq</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/tables.css">
    <link rel="stylesheet" href="../styles/modalConsultaR.css">
    <script defer src="../scripts/adminConsultaR.js"></script>
</head>
<body class="admin-contact-page">
    <header class="header">
        <h1><a href="index.html">Tryateq</a></h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="./admin-dashboard.php">Panel Admin</a></li>
                <li><a href="../php/admin/cerrar_sesion.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-admin">
        <h2>Registros de Contacto</h2>
        <div class="contact-records-container">
            <table class="records-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Mensaje</th>
                        <th>Fecha</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Juan Pérez</td>
                        <td>Empresa ABC</td>
                        <td>juan.perez@example.com</td>
                        <td>5551234567</td>
                        <td>Quiero automatizar mis procesos.</td>
                        <td>2024-11-19</td>
                        <td>
                            <button class="send-email-button" 
                                    data-email="juan.perez@example.com" 
                                    data-name="Juan Pérez">
                                Enviar Correo
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <div id="email-modal" class="modal hidden">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Enviar Correo</h2>
            <form id="email-form">
                <label for="recipient">Para:</label>
                <input type="email" id="recipient" name="recipient" readonly>
                
                <label for="subject">Asunto:</label>
                <input type="text" id="subject" name="subject" value="Información de Contacto" required>
                
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="6" required>
Hola [Nombre],

Gracias por contactarnos. Nos encantaría ayudarle a alcanzar sus objetivos. Por favor, póngase en contacto con nosotros para agendar una reunión.

Saludos,
Equipo de Tryateq
                </textarea>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>Todos los derechos reservados Tryateq</p>
    </footer>
</body>
</html>