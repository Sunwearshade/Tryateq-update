<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/mtec-update/php/conn_db.php';

if(isset($_POST['searchQuery'])) {
    $search = '%' . $_POST['searchQuery'] . '%';
    $sql = "SELECT * FROM soluciones WHERE nombre_local LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $search);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table class='records-table'>
                <thead>
                    <tr>
                        <th>Nombre Local</th>
                        <th>Dirección Local</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['nombre_local']}</td>
                    <td>{$row['direccion_local']}</td>
                    <td>{$row['descripcion']}</td>
                    <td><img src='../images/{$row['imagen_local']}' alt='Imagen Local' width='100'></td>
                </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>No se encontraron soluciones registradas.</p>";
    }
}
?>
