<?php 
include ('header.php');
?>
<!-- CONTENIDO-->
    <?php 
        $query = "SELECT COUNT(*) total FROM inventario";
        $result = mysqli_query($conn,$query);  
        $sum = mysqli_fetch_assoc($result);
        

    ?>
    <div class="contador-container">
        <div class="contador-bloque">
            <div class="icono-producto">
                <img src="img/productos.png" alt="">
            </div>
            <div class="contador-texto">
                <p>PRODUCTOS</p>
                <p><strong><?php echo $sum['total']; ?></strong></p>
            </div>
        </div>
        <div class="contador-bloque">
            <div class="icono-ventas">
                <img src="img/pago.png" alt="">
            </div>
            <div class="contador-texto">
                <p>VENTAS DEL MES</p>
                <p><strong>21</strong></p>
            </div>
        </div>
        <div class="contador-bloque">
            <div class="icono-ingresosm">
                <img src="img/stanksm.png" alt="">
            </div>
            <div class="contador-texto">
                <p>INGRESOS DEL MES</p>
                <p><strong>$50.000</strong></p>
            </div>
        </div>
        <div class="contador-bloque">
            <div class="icono-ingresosa">
                <img src="img/stanksa.png" alt="">
            </div>
            <div class="contador-texto">
                <p>INGRESO ANUAL</p>
                <p><strong>$1.000.000</strong></p>
            </div>
        </div>
    </div>
    <div class="container-balance">
        <div class="container-datos">
            <p>Egresos del mes <strong>$130.000</strong></p> 
            <p>Ganancia del mes <strong>$250.000</strong></p> 
            <p>Egresos del Año <strong>$300.000</strong></p>            
            <p>Ganancia del Año <strong>$900.000</strong></p> 
            <br>
            <p><strong>Balance de presupuesto mensual</strong></p>
            <p>Dinero faltante: <strong>-$100.000</strong></p> 

        </div>
        <div class="container-grafico">
            <h1>Balance ingresos últimos 15 dias</h1>
            <canvas id="grafica"></canvas>
        </div>
    </div>

<!-- /CONTENIDO-->

</body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/menu.js"></script>
<script src="js/item.js"></script>
<script src="js/item1.js"></script>
<script>
let miCanvas=document.getElementById("grafica").getContext("2d");
var chart = new Chart(miCanvas,{
    type:"line",
    data:{
        labels:["06 Jul","08 Jul","10 Jul","11 Jul","12 Jul","13jul","14jul","15jul","17jul"],
        datasets:[
            {
                label:"Avance diario",
                backgroundColor:"rgb(75, 166, 114)",
                borderColor:"rgb(70,156,83)",
                borderWidth: 6,
                data:[300000,205000,125000,320000,290000,240000,310000,290000,400000]
            }
        ]
    }
})
</script>
</html>