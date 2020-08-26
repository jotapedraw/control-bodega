<?php 
include ('conexion.php');



if (isset($_POST['save'])) {
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $stock = $_POST['Stock'];
  $precio = $_POST['precio'];
  $query = "INSERT INTO inventario(codigo, nombre, Stock, precio) VALUES 
  ('$codigo', '$nombre', '$stock', '$precio')";
  $result = $conn->query($query);
 
 

  header('Location: ../inventario.php');

}

if (isset($_POST['savecodigo'])) {
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];

  $query = "INSERT INTO grupo(codigo, nombre_codigo) VALUES 
  ('$codigo', '$nombre')";
  $result = $conn->query($query);
 
 

  header('Location: ../inventario.php');

}

if (isset($_POST['savecaja'])) {
  $nombre = $_POST['nombre'];
  $fondos = $_POST['fondos'];

  $query = "INSERT INTO caja_dineros(nombre_caja, fondos) VALUES 
  ('$nombre', '$fondos')";
  $result = $conn->query($query);
 
 

  header('Location: ../caja.php');

}

if (isset($_POST['saveropa'])) {
  $tipo = $_POST['tipo'];
  $talla = $_POST['talla'];
  $desc = $_POST['desc'];
  $estado = $_POST['estado'];
  $precio = $_POST['precio'];
  $query = "INSERT INTO ropas(tipo, talla, descripcion, precio, venta) VALUES 
  ('$tipo', '$talla', '$desc', '$precio', '$estado')";
  $result = $conn->query($query);
 
 

  header('Location: ../inventario-ropa.php');

}

if (isset($_POST['savetipo'])) {
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];

  $query = "INSERT INTO tipo(id_tipo, nombre) VALUES 
  ('$codigo', '$nombre')";
  $result = $conn->query($query);
 
 

  header('Location: ../inventario-ropa.php');

}

?>