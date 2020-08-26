<?php 
include ('conexion.php');

if(isset($_POST['retirar'])){
    $fondos = $_POST['fondos'];
    $plata  = $_POST['plata'];
    $retiro =  $plata - $fondos;



    $query = "UPDATE caja_dineros SET fondos ='$retiro' WHERE id_caja = 1  ";
    mysqli_query($conn, $query);

    header('Location: ../caja.php');


}

if(isset($_POST['reponer'])){
    $fondos = $_POST['fondos'];
    $plata  = $_POST['plata'];
    $repuesto =  $plata + $fondos;



    $query = "UPDATE caja_dineros SET fondos ='$repuesto' WHERE id_caja = 1  ";
    mysqli_query($conn, $query);

    header('Location: ../caja.php');


}

if(isset($_POST['retirarfondo'])){
    $id = $_POST['id'];
    $fondos = $_POST['fondos'];
    $plata  = $_POST['plata'];
    $retiro =  $fondos - $plata;



    $query = "UPDATE caja_dineros SET fondos ='$retiro' WHERE id_caja = $id";
    mysqli_query($conn, $query);

    header('Location: ../caja.php');


}

if(isset($_POST['reponerfondo'])){
    $id = $_POST['id'];
    $fondos = $_POST['fondos'];
    $plata  = $_POST['plata'];
    $repuesto =  $plata + $fondos;



    $query = "UPDATE caja_dineros SET fondos ='$repuesto' WHERE id_caja = $id";
    mysqli_query($conn, $query);

    header('Location: ../caja.php');


}
?>