<?php 
include ('header.php');
?>
<!-- MODAL ADD -->
<div class="modal-add">
        <div class="container-add">
            <p class="btn-crear">ocultar</p>

            <h1><img src="img/añadir.png" alt=""> Añadir ropa</h1>
            <form action="conexion/save.php" method="POST">
                <select name="tipo" id="" placeholder="Código">
                    <option value="">Tipo</option>
                    <option value="">---</option>
                    <?php
                        $query = "SELECT * FROM tipo";
                        $result_tasks = mysqli_query($conn, $query);  
       
                        while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
                            <option value="<?php echo $fila['id_tipo']; ?>"><?php echo $fila['id_tipo'];?> - <?php echo $fila['nombre']; ?></option>
                        <?php } ?>
                </select>
                <input type="text" name="talla" id="" placeholder="Talla">
                <input type="text" name="desc" id="" placeholder="Descripción">
                <input type="number" name="precio" id="" placeholder="Precio Unidad">
                <select name="estado" id="">
                    <option value="">Estado</option>
                    <option value="">---</option>
                    <option value="En venta">En venta</option>
                    <option value="Vendido">Vendido</option>
                    <option value="En stock">En stock</option>
                </select>
                
                <input type="submit" name="saveropa" value="Añadir">
    
            </form>
        </div>
    </div>
<div class="modal-addgroup">
    <div class="container-add">
        <p class="btn-group">ocultar</p>

        <h1>Crear tipo de ropa</h1>
        <form action="conexion/save.php" method="POST">
            <input type="text" name="codigo" id="" placeholder="Código">
            <input type="text" name="nombre" id="" placeholder="Nombre de tipo">
            <input type="submit" name="savetipo" value="Añadir">
            <input type="reset" value="Limpiar">
        </form>
    </div>
</div>
<!-- /MODAL ADD -->
<!-- TABLE -->
    <div class="container-centrar-columna">
        <div class="cabecera">
            <h1><img src="img/invent.png" alt=""> Inventario</h1>
            <p class="btn-crear"><img src="img/añadir.png" alt=""> Añadir ropa</p>
            <p class="btn-group"><img src="img/productos.png" alt=""> Añadir tipo de ropa</p>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Talla</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
                <?php
                    $query = "SELECT * FROM ropas";
                    $result_tasks = mysqli_query($conn, $query);  
       
                     while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['tipo']; ?></td>
                    <td><?php echo $fila['talla']; ?></td>
                    <td><?php echo $fila['descripcion']; ?></td>
                    <td>$<?php echo $fila['precio']; ?></td>
                    <td><?php echo $fila['venta']; ?></td>
                    <td><a class="editar" href="edit.php?id=<?php echo $fila['id']; ?>"><img src="img/lapiz.png" alt="">Editar</a>
                        <a class="borrar" href="conexion/delete.php?id=<?php echo $fila['id']; ?>"><img src="img/borrar.png" alt=""> Borrar</a></td>                                      
            </tr>
                <?php } ?>
        </table>
    </div>

<!-- /TABLE -->
</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/menu.js"></script>
<script src="js/item.js"></script>
<script src="js/item1.js"></script>
<script src="js/add.js"></script>
<script src="js/addgroup.js"></script>
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