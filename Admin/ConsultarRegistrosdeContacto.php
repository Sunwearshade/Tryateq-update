<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Registros de Contacto - Tryateq</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/tables.css">
    <link rel="stylesheet" href="../styles/modalConsultaR.css">
    <script src="../scripts/sendEmailScript.js" defer></script>
</head>
<body class="admin-contact-page">
    <header class="header">
        <h1><a href="index.html">Tryateq</a></h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="./admin-dashboard.php">Panel Admin</a></li>
                <li><a href="ConsultarRegistrosdeContacto.php">Consultar Registros de Contacto</a></li>
                <li><a href="ConsultarRegistrosSoluciones.php">Consultar Registros de Soluciones</a></li>
                <li>
                    <form action="../php/admin/cerrar_sesion.php" method="POST">
                    <button type="submit" class="cerrar-sesion-button">Cerrar sesión</button>
                    </form>
                </li>
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
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/php/conn_db.php';

                    if ($conn->connect_error) {
                        echo "<tr><td colspan='7'>Error de conexión: " . $conn->connect_error . "</td></tr>";
                    } else {
                        $sql = "SELECT id, nombre, correo, telefono, mensaje, empresa FROM contacto";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td>{$row['nombre']}</td>
                                    <td>{$row['empresa']}</td>
                                    <td>{$row['correo']}</td>
                                    <td>{$row['telefono']}</td>
                                    <td>{$row['mensaje']}</td>
                                    <td>
                                        <button class='send-email-button' 
                                                data-email='{$row['correo']}' 
                                                data-name='{$row['nombre']}'>
                                            Enviar Correo
                                        </button>
                                    </td>
                                </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>No hay registros disponibles.</td></tr>";
                        }
                        $conn->close();
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer class="footer">
        <p>Todos los derechos reservados Tryateq</p>
    </footer>
</body>
</html>

