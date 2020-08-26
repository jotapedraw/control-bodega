<?php 
include ('header.php');
?>
<!-- MODAL ADD -->
<div class="modal-add">
        <div class="container-add">
            <p class="btn-crear">ocultar</p>

            <h1><img src="img/añadir.png" alt=""> Añadir producto</h1>
            <form action="conexion/save.php" method="POST">
                <select name="codigo" id="" placeholder="Código">
                    <option value="">Código</option>
                    <option value="">---</option>
                    <?php
                        $query = "SELECT * FROM grupo";
                        $result_tasks = mysqli_query($conn, $query);  
       
                        while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
                            <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo'];?> - <?php echo $fila['nombre_codigo']; ?></option>
                        <?php } ?>
                </select>
                <input type="text" name="nombre" id="" placeholder="Nombre">
                <input type="number" name="stock" id="" placeholder="Stock">
                <input type="number" name="precio" id="" placeholder="Precio Unidad">
                <input type="submit" name="save" value="Añadir">
                <input type="reset" value="Limpiar">
            </form>
        </div>
    </div>
<div class="modal-addgroup">
    <div class="container-add">
        <p class="btn-group">ocultar</p>

        <h1>Crear nuevo código</h1>
        <form action="conexion/save.php" method="POST">
            <input type="text" name="codigo" id="" placeholder="Código">
            <input type="text" name="nombre" id="" placeholder="Nombre de código">
            <input type="submit" name="savecodigo" value="Añadir">
            <input type="reset" value="Limpiar">
        </form>
    </div>
</div>
<!-- /MODAL ADD -->
<!-- TABLE -->
    <div class="container-centrar-columna">
        <div class="cabecera">
            <h1><img src="img/invent.png" alt=""> Inventario</h1>
            <p class="btn-crear"><img src="img/añadir.png" alt=""> Añadir producto</p>
            <p class="btn-group"><img src="img/productos.png" alt=""> Añadir código de grupo</p>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Precio</th>
                <th>Acción</th>
            </tr>
                <?php
                    $query = "SELECT * FROM inventario";
                    $result_tasks = mysqli_query($conn, $query);  
       
                     while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
            <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['codigo']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['Stock']; ?></td>
                    <td>$<?php echo $fila['precio']; ?></td>
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