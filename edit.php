<?php 
include ('header.php');

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM inventario WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $codigo = $row['codigo'];
    $nombre = $row['nombre'];
    $stock = $row['Stock'];
    $precio = $row['precio'];
    
  }
}

?>

<body>
<div class="container-centrar-columna">
  <div class="cabecera">
      <h1><img src="img/lapiz.png" alt="">Editar producto</h1>
  </div>  
    <form action="conexion/edit.php?id=<?php echo $_GET['id']; ?>" method="POST">

      <input type="text" name="ID" value="<?php echo $id; ?>" placeholder="ID" >
      <select name="codigo" id="" placeholder="Código">
        <option value=""><?php echo  $codigo; ?></option>
        <option value="">---</option>
        <?php
            $query = "SELECT * FROM grupo";
            $result_tasks = mysqli_query($conn, $query);  

            while ($fila = mysqli_fetch_assoc($result_tasks)) { ?>
                <option value="<?php echo $fila['codigo']; ?>"><?php echo $fila['codigo'];?> - <?php echo $fila['nombre_codigo']; ?></option>
        <?php } ?>
      </select>
      <input type="text" name="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre" >
      <input type="number"  name="stock" value="<?php echo $stock; ?>" placeholder="Stock" >
      <input type="number" name="precio" value="<?php echo $precio; ?>" placeholder="Precio" >
      <input type="submit" name="update" value="Editar">
      <input type="reset" value="Limpiar">
    </form>
</div>
</body>
</html>/
