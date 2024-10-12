<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/Mtec/php/conn_db.php';

$response = [];

if (isset($_POST['subirInfo'])) {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $response['error'] = "Token CSRF no válido";
        echo json_encode($response);
        exit;
    }

    // Sanitizar la entrada
    $nombre = htmlspecialchars(trim($_POST['nombre']), ENT_QUOTES, 'UTF-8');
    $empresa = htmlspecialchars(trim($_POST['empresa']), ENT_QUOTES, 'UTF-8');
    $correo = htmlspecialchars(trim($_POST['correo']), ENT_QUOTES, 'UTF-8');
    $telefono = htmlspecialchars(trim($_POST['telefono']), ENT_QUOTES, 'UTF-8');
    $mensaje = htmlspecialchars(trim($_POST['objetivo']), ENT_QUOTES, 'UTF-8');

    // Validaciones
    if (empty($nombre)) {
        $response['error'] = "Por favor, ingrese su nombre";
    } elseif (empty($empresa)) {
        $response['error'] = "Por favor, ingrese el nombre de la empresa";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $response['error'] = "Por favor, ingrese un correo electrónico válido";
    } elseif (!preg_match('/^[0-9]{10}$/', $telefono)) {
        $response['error'] = "Por favor, ingrese un número de teléfono válido";
    } elseif (empty($mensaje)) {
        $response['error'] = "Por favor, ingrese su objetivo/meta";
    } else {
        // Insertar en la base de datos
        $query = "INSERT INTO contacto(nombre, empresa, correo, telefono, mensaje) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $nombre, $empresa, $correo, $telefono, $mensaje);
        $result = $stmt->execute();

        if (!$result) {
            $response['error'] = "Error en el registro: " . $conn->error;
        } else {
            $response['success'] = "¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.";
        }
    }

    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    // Devolver la respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
}

$conn->close();
