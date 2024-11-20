<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Tryateq</title>
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="../styles/login.css">
  <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/php/admin/procesar_login.php'
  ?>
</head>
<body class="login-page">
  <header class="header">
    <h1><a href="index.html">Tryateq</a></h1>
  </header>
  
  <main class="login-container">
    <form class="login-form" id="loginForm" method="POST">
      <h2>Iniciar Sesión</h2>
      <label for="email">Correo Electrónico</label>
      <input type="email" id="email" name="email" value="prueba@ejemplo.com" required>
      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" value="123456" required>
      <button type="submit" class="submit-button">Login</button>
    </form>
  </main>
</body>
</html>
