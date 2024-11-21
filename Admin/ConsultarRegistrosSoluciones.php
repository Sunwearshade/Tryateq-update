<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Registros de Soluciones - Tryateq</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="admin-dashboard">
    <header class="header">
        <h1>Panel de Administrador</h1>
        <nav class="nav">
            <ul class="nav-list">
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="admin-dashboard.php">Panel Admin</a></li>
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

    <main class="admin-main">
        <h2>Buscar Registros</h2><br>
        <input type="text" id="search-bar" placeholder="Buscar registros por nombre">
        <div id="results"></div>
    </main>

    <script>
        $(document).ready(function() {
            $('#search-bar').on('input', function() {
                var searchQuery = $(this).val();

                $.ajax({
                    url: '../php/admin/buscar_soluciones.php',
                    method: 'POST',
                    data: { searchQuery: searchQuery },
                    success: function(response) {
                        $('#results').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>
