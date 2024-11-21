<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/php/conn_db.php';

$sql = "SELECT * FROM soluciones";
$result = $conn->query($sql);

$solutions = [];
while ($row = $result->fetch_assoc()) {
    $solutions[] = $row;
}

echo json_encode(['solutions' => $solutions]);

$conn->close();
