<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/php/conn_db.php';

if(isset($_POST['registrarSolucion'])){
    $name = $_POST['name'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    
    if (!empty($name) && !empty($address) && !empty($description) && !empty($image)) {
        $query = "INSERT INTO soluciones (nombre_local, direccion_local, descripcion, imagen_local) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssss", $name, $address, $description, $image);

        if ($stmt->execute()) {
            echo "<script>
                        alert('Se ha agregado la solución con éxito.');
                        window.location.href = '/mtec-update/Admin/admin-dashboard.php';</script>;
                </script>";
        } else {
            echo "Error al insertar al insertar la solución: " . $conn->error;
        }
    } else {
        echo '<script>alert("Por favor, complete todos los campos.");</script>';
    }
}