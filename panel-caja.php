<?php 
include ('header.php');

?>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
<!-- CONTAINER CAJA -->
    <div class="container-centrar-columnapanel">
        <div class="cabecera">
            <h1><img src="img/cajareg.png" alt="">Panel Caja</h1>
        </div>
        <div class="container-panel">

            <form action="" method="POST">
                <table id="dynamic_field">
                    <tr>
                        
                        <td><p>Por código</p></td>
                        <td><p>Por nombre</p></td>
                        <td><p>Cant.</p></td>
                        <td></td>
                    </tr>
                    <tr>
     
                        <td>
                            <select name="lista1" id="lista1">
                                <option value="">---</option>
                                <?php
                                    $query = "SELECT * FROM grupo";
                                    $result_tasks = mysqli_query($conn, $query);  

                                    while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
                                        <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo'];?> - <?php echo $fila['nombre_codigo']; ?></option>
                                    <?php } ?>
                            </select>
                        </td>
                        <td id="selectlista">
                        </td>
                        <td class="cant">
                            <input type="number" name="cantidad" id="">
                        </td>  
                        <td>
                            <button type="button" name="add" id="add" value="">
                                <img src="img/añadir.png" alt=""> 
                                Añadir 
                            </button>
                        </td> 
                    </tr> 
                    <tr>
     
                        <td>
                            <select name="lista1" id="lista1">
                                <option value="">---</option>
                                <?php
                                    $query = "SELECT * FROM grupo";
                                    $result_tasks = mysqli_query($conn, $query);  

                                    while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
                                        <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo'];?> - <?php echo $fila['nombre_codigo']; ?></option>
                                    <?php } ?>
                            </select>
                        </td>
                        <td id="selectlista">
                        </td>
                        <td class="cant">
                            <input type="number" name="cantidad" id="">
                        </td>  
                        <td>
                            <button type="button" name="add" id="add" value="">
                                <img src="img/añadir.png" alt=""> 
                                Añadir 
                            </button>
                        </td> 
                    </tr> 
                    <tr>
     
                    <tr class="añadir-prodto">

                    </tr>
                </table>                   
            </form>
            <table class="container-detalle">
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <div class="container-total">
                <table>
                    <tr>
                        <td><p>$1300</p></td>
                        <td><strong>Total</strong> </td>                        
                    </tr>
                    <tr> 
                        <td><input type="number" name="" id=""></td>
                        
                        <td><strong>Dinero</strong></td>
                    </tr>
                    <tr>                   
                        <td><p>$200</p></td>
                        <td><strong>Vuelto</strong></td>     
                    </tr>
                    <tr>
                        
                        <td><input type="number" name="" id=""></td>
                        <td><strong>Caja de cambio</strong></td>
                    </tr>
                </table>
                <button class="compra">Efectuar compra</button>
            </div>
        </div>

    </div>
<!-- /CONTAINER CAJA -->

<script src="js/menu.js"></script>
<script src="js/item.js"></script>
<script src="js/item1.js"></script>


</body>
</html>
<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><select name="lista1" id="lista1"><option value="">---</option><?php $query = "SELECT * FROM grupo";$result_tasks = mysqli_query($conn, $query); while ($fila = mysqli_fetch_assoc($result_tasks)) { ?><option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo'];?> - <?php echo $fila['nombre_codigo']; ?></option><?php } ?></select></td><td id="selectlista"></td><td class="cant"><input type="number" name="cantidad" id=""></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});	
});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		//$('#lista1').val(1);
		recargarLista();

		$('#lista1').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"conexion/select.php",
			data:"item=" + $('#lista1').val(),
			success:function(r){
				$('#selectlista').html(r);
			}
		});
	}
</script>
