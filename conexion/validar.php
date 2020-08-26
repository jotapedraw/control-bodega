<?php 
session_start();
include_once 'conexion.php';

$user = $_POST['user'];
$pass = $_POST['pass'];
$q = $bd->prepare('select * from usuarios where user = ? and pass = ?;');

$q->execute([$user, $pass]);
$datos = $q->fetch(PDO::FETCH_OBJ);
//print_r($datos);

if ($datos === FALSE) {
    echo'<script type="text/javascript">
    alert("Usuario, Contraseña o Sesión incorrectos");
    window.location.href="./index.php";
    </script>';
}elseif($q->rowCount() == 1){

    echo "nice";
}
?>