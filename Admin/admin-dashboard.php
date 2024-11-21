  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administrador</title>
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap" async defer></script>
    <script src="../scripts/mapa.js"></script>
    <?php
      require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/php/admin/registrar_solucion.php';
    ?>
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
      <h2>Consulta de Locales</h2>
      <p>Selecciona un local para registrar una solución</p>
      <div id="map" style="height: 500px;"></div>
      <div id="solucion" style="display: none;">
        <h2>Registrar Solución</h2>
        <form id="register-solution-form" method="POST" enctype="multipart/form-data">
          <label for="name">Nombre del local:</label>
          <input type="text" name="name" placeholder="Nombre del local" required>
          <label for="adress">Dirección:</label>
          <input type="text" name="address" placeholder="Dirección" required>
          <label for="description">Descripción de la solución:</label>
          <textarea name="description" placeholder="Descripción" required></textarea>
          <label for="file">Imagen del local:</label>
          <input type="hidden" name="imageUrl">
          <button type="submit" name="registrarSolucion">Registrar Solución</button>
        </form>
      </div>
    </main>
  </body>
  </html>
