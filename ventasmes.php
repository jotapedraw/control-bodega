<?php 
include ('header.php');

?>

<!-- TABLE -->
    <div class="container-centrar-columna">
        <div class="cabecera">
            <h1><img src="img/cajareg.png" alt=""> Ventas del mes</h1>
            
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Productos</th>
                <th>Valor</th>
                <th>Acción</th>
            </tr>
            <tr>
                <td>1</td>
                <td>12-08</td>
                <td>galleta serrana, 1kl pan</td>
                <td>$1200</td>
                <td><a class="editar" href=""><img src="img/lapiz.png" alt=""> Editar</a><a class="borrar" href=""><img src="img/borrar.png" alt=""> Borrar</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>12-08</td>
                <td>pepsi 1lt, 1kl pan, queso gauda</td>
                <td>$1900</td>
                <td><a class="editar" href=""><img src="img/lapiz.png" alt=""> Editar</a><a class="borrar" href=""><img src="img/borrar.png" alt=""> Borrar</a></td>
            </tr>
        </table>
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