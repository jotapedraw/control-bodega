<?php 
include ('header.php');
 
$query = "SELECT fondos FROM caja_dineros WHERE id_caja = 1";
$result = mysqli_query($conn,$query);  
$cajachica = mysqli_fetch_row($result);
?>
<!-- MODAL ADD -->
<div class="modal-add">
        <div class="container-add">
            <p class="btn-crear">ocultar</p>

            <h1><img src="img/añadir.png" alt=""> Añadir caja</h1>
            <form action="conexion/save.php" method="POST">
                <input type="text" name="nombre" id="" placeholder="Nombre de caja">
                <input type="number" name="fondos" id="" placeholder="Fondos">
                <input type="submit" name="savecaja" value="Añadir">
                <input type="reset" value="Limpiar">
            </form>
        </div>
    </div>
<!-- /MODAL ADD -->
<!-- TABLE -->
    <div class="container-centrar-columna">
        <div class="cabecera">
            <h1><img src="img/cajareg.png" alt=""> Caja chica</h1>
            <p class="btn-crear"><img src="img/añadir.png" alt=""> Añadir Caja</p>
        </div>
        <div class="container-panel">
            <h1>Caja chica</h1>
            <p class="monto"><strong>$<?php echo $cajachica[0];  ?></strong></p>
            <form action="conexion/cajafondos.php" method="POST">
                <div class="cajachica">
                    
                    <p>Fondos : </p>
                    <input type="number" name="fondos" id="">
                    <input type="hidden" name="plata" value="<?php echo $cajachica[0]; ?>">
                    <button name="retirar" type="submit">Retirar fondos</button>
                    <button name="reponer" type="submit">Reponer fondos</button>

                </div>
            </form>
        </div>

        <?php
            $query = "SELECT * FROM caja_dineros WHERE id_caja > 1";
            $result_tasks = mysqli_query($conn, $query);  
    
            while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
                <div class="container-panel">
                    <h1><?php echo $fila['nombre_caja']; ?></h1>
                    <p class="monto"><strong>$<?php echo $fila['fondos']; ?></strong></p>
                    <form action="conexion/cajafondos.php" method="POST">
                        <div class="cajachica">
                            <p>Fondos : </p>
                            <input type="hidden" name="id" value="<?php echo $fila['id_caja']; ?>">
                            <input type="hidden" name="fondos" value="<?php echo $fila['fondos']; ?>">
                            <input type="number" name="plata" id="">
                            <button name="retirarfondo" type="submit">Retirar fondos</button>
                            <button name="reponerfondo" type="submit">Reponer fondos</button>
                            <a class="eliminar" href="conexion/delete.php?idcaja=<?php echo $fila['id_caja']; ?>"><strong>X</strong> Borrar caja</a>
                        </div>
                    </form>    
                </div>            
        <?php } ?>
    </div>

<!-- /TABLE -->
</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/menu.js"></script>
<script src="js/item.js"></script>
<script src="js/item1.js"></script>
<script src="js/add.js"></script>
<script>
let miCanvas=document.getElementById("grafica").getContext("2d");
var chart = new Chart(miCanvas,{
    type:"line",
    data:{
        labels:["06 Jul","08 Jul","10 Jul","11 Jul","12 Jul"],
        datasets:[
            {
                label:"Avance diario",
                backgroundColor:"rgb(75, 166, 114)",
                borderColor:"rgb(70,156,83)",
                borderWidth: 6,
                data:[300000,205000,125000,320000,290000]
            }
        ]
    }
})
</script>
</html>