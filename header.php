
<?php 
include ('conexion/conexion.php');


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-general.css">
    <link rel="stylesheet" href="css/style-home.css">
    <link rel="stylesheet" href="css/style-table.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    
    <title>Bodega</title>
</head>
<body>
<!-- HEADER -->
    <header>
        <div class="logo"><img src="img/logo3.png" alt=""></div>
        <div class="menu_bar">
            <img src="img/menu.png" alt="">
        </div>
        <a href="index.html">Salir</a>
    </header>
    <div class="contenedor">
        
    </div>
  
    <div class="menu">
        <nav>
            <a href="home.php"><img src="img/home.png" alt=""> Inicio</a>
            <a class="caja" href="#"><img src="img/cajareg.png" alt=""> Caja <img class="flecha" src="img/expand.png" alt=""></a>

            <a href="inventario.php"><img src="img/invent.png" alt=""> Inventario</a>
            <a class="herramientas" href="#"><img src="img/tool.png" alt=""> Herramientas <img class="flecha" src="img/expand.png" alt=""></a>
            <a href=""><img src="img/ajustes.png" alt=""> Ajustes</a>
        </nav>
    </div>
    <div class="despliegue-caja">
        <a href="panel-caja.php">Panel Caja</a>
        <a href="ventasmes.php">Ventas del mes</a>
        <a href="caja.php">Caja chica/cambio</a>
    </div>
    <div class="despliegue-herramientas">
            <a href="#">Presupuestos</a>
            <a href="#">Calculadora</a>
            <a href="#">Proveedores</a>
            <a href="#">Rendición IVA</a>     
        </div>   
    
    
<!-- /HEADER -->