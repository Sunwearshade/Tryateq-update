<?php
$hostname = 'localhost';
$db = 'tryateq';
$username = 'root';
$password = '';

$conn = new mysqli($hostname, $username, $password, $db); 
    if ($conn->connect_error) {
        die("Error al conectarse a la DB.". $conn->connect_error);
    }