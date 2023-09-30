<?php
include('../config/db.php');

$sql="SELECT * FROM PRODUCTOS";
$sentencia=$conexion->prepare($sql);
$sentencia->execute();
$listaproductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
 


foreach($listaproductos as $producto){
?>
  <tr>
    <td><?php echo $producto['nombre'] ?></td>
    <td>
        <img src="../../img/<?php echo $producto['imagen'] ?>" width="100" height="100" alt="">
    </td>
    <td><?php echo $producto['precio']; ?></td>
    <td><?php echo $producto['stock']; ?></td>
    <td>
  </tr>
<?php }
 ?>
          