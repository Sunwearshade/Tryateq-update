<?php
    session_start();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Mtec/php/conn_db.php';

        if (isset($_POST['subirInfo'])) {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
                die("Token CSRF no válido");
            }
            // Sanitizar la entrada
            $nombre = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
            $empresa = htmlspecialchars(trim($_POST['Enterprises']), ENT_QUOTES, 'UTF-8');
            $correo = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
            $telefono = htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8');
            $mensaje = htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8');
        
            // Validaciones
            if (empty($nombre)) {
                echo '<script>alert("Por favor, ingrese su nombre")</script>';
            } elseif (empty($empresa)) {
                echo '<script>alert("Por favor, ingrese el nombre de la empresa")</script>';
            } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                echo '<script>alert("Por favor, ingrese un correo electrónico válido")</script>';
            } elseif (!preg_match('/^[0-9]{10}$/', $telefono)) {
                echo '<script>alert("Por favor, ingrese un número de teléfono válido")</script>';
            } elseif (empty($mensaje)) {
                echo '<script>alert("Por favor, ingrese su objetivo/meta")</script>';
            } else {
                // Insertar en la base de datos
                $query = "INSERT INTO contacto(nombre, empresa, correo, telefono, mensaje) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("sssss", $nombre, $empresa, $correo, $telefono, $mensaje);
                $result = $stmt->execute();
        
                if (!$result) {
                    die("Error en el registro: " . $conn->error);
                } else {
                    echo '<script>alert("¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.")</script>';
                }
            }
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        
        $conn->close();