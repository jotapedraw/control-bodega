<?php
include ('conexion.php');

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM inventario WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error en Borrar.");
  }

  header('Location: ../inventario.php');
}

if(isset($_GET['idcaja'])) {
  $id = $_GET['idcaja'];
  $query = "DELETE FROM caja_dineros WHERE id_caja = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Error en Borrar.");
  }

  header('Location: ../caja.php');
}


?>
