<?php 
include ('conexion.php');

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $ID = $_POST['ID'];
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $stock = $_POST['stock'];
  $precio = $_POST['precio'];

  $query = "UPDATE inventario set id = '$ID', codigo = '$codigo', nombre = '$nombre', Stock = '$stock', precio = '$precio' WHERE id = $id";
  $result = $conn->query($query);

  var_dump($result);
  header('Location: ../inventario.php');
}
?>