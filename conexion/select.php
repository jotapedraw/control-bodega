<?php 
include ('conexion.php');
$cod=$_POST['item'];

	$sql = "SELECT * from inventario where codigo = '$cod' ORDER BY nombre ASC";

	$result = mysqli_query($conn,$sql);

	$cadena = "<select id='lista2' name='lista2'>";

	while ($ver = mysqli_fetch_row($result)) {
		$cadena = $cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
	}

	echo  $cadena."</select>";
	

?>