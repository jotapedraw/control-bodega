<?php
$conn = new mysqli("localhost", "root", "", "control_bodega");
if ($conn->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
}
?>