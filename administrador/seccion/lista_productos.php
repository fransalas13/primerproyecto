


<?php include("cabecera.php"); ?>



<?php 
include("../config/db.php");

$consulta ="SELECT NOMBRE,PRECIO,STOCK,NM_MARCA FROM PRODUCTOS,MARCA,DETALLE_MARCA_PRODUCTO 
WHERE ID_MARCA=RELA_MARCA AND RELA_PRODUCTO=ID_PRODUCTO" ;
$sentencial=$conexion->prepare($consulta);
$sentencial->execute();


$listaproductos=$sentencial->fetchAll(PDO::FETCH_ASSOC);

?>
<table class="tableproductos">
    <thead>
        <tr>
            <th>Articulo</th> 
            <th>Marca</th>
            <th>Stock</th>
            <th>Precio</th>
        </tr>
    </thead>
<?php
foreach($listaproductos as $producto){ ?>

    <tr>
        <td><?php  echo $producto['NOMBRE']; ?></td>
        <td><?php  echo $producto['NM_MARCA']; ?></td>
        <td><?php  echo $producto['STOCK']; ?></td>
        <td><?php  echo "$". $producto['PRECIO']; ?></td>

        
    </tr>


<?php }
?>
</table>