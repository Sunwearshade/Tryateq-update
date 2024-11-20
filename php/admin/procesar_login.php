<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "tryateq";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
            header('Location: admin-dashboard.html');
            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta."); window.location.href = "login.html";</script>';
        }
    } else {
        echo '<script>alert("Correo no registrado."); window.location.href = "login.html";</script>';
    }
}
$conn->close();
?>
