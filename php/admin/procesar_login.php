<?php
require_once $_SERVER["DOCUMENT_ROOT"] . '/mtec-update/php/conn_db.php';

session_start();

if (isset($_POST["login-form"])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) {
            header('Location: admin-dashboard.php');
            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta."); window.location.href = "login.php";</script>';
        }
    } else {
        echo '<script>alert("Correo no registrado."); window.location.href = "login.php";</script>';
    }
}
$conn->close();
?>
