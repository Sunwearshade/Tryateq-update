<?php
    session_start();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/Mtec/php/conn_db.php';

        if(isset($_POST['subirInfo'])){
            if(isset($_POST['name']) && !empty($_POST['name'])){
                if(isset($_POST['Enterprises']) && !empty($_POST['Enterprises'])){
                    if(isset($_POST['email']) && !empty($_POST['email'])){
                        if(isset($_POST['phone']) && !empty($_POST['phone'])){
                            if(isset($_POST['message']) && !empty($_POST['message'])){
                                $nombre = $_POST['name'];
                                $empresa = $_POST['Enterprises'];
                                $correo = $_POST['email'];
                                $telefono = $_POST['phone'];
                                $mensaje = $_POST['message'];
        
                                $query = "INSERT INTO contacto(nombre, empresa, correo, telefono, mensaje) VALUES (?, ?, ?, ?, ?)";
                                $stmt = $conn->prepare($query);
                                $stmt->bind_param("sssss", $nombre, $empresa, $correo, $telefono, $mensaje);
                                $result = $stmt->execute();
        
                                if(!$result){
                                    die("Error en el registro: " . $conn->error);
                                } else{
                                    echo '<script>alert("¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.")</script>';
                                }
                            } else {
                                echo '<script>alert("Falta ingresar su objetivo/meta")</script>';
                            }
                        } else {
                            echo '<script>alert("Falta ingresar su número de teléfono")</script>';
                        }
                    } else {
                        echo '<script>alert("Falta ingresar su correo electrónico")</script>';
                    }
                } else {
                    echo '<script>alert("Falta ingresar el nombre de la empresa")</script>';
                }
            } else {
                echo '<script>alert("Falta ingresar su nombre")</script>';
            }
        }
        
        $conn->close();