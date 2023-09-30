<?php include('cabecera.php') ;
include('../config/db.php');?>
  
<main>
    <div class="contenido">
        <div class="mostrador" id="mostrador">
        <?php
                                        $query = "SELECT * FROM PRODUCTOS";
                                        $Resultado = $conexion->query($query);
                                        while($row = $Resultado->fetch(PDO::FETCH_ASSOC)){
         ?>
        <div class="fila">
            <div class="item">
            
            <img src="../../img/<?php echo $row['imagen'];?>" class="card-img-top">
            <p class="descripcion" >Producto: <?php echo $row['nombre'];?></p>
            <p class="precio">Precio: <?php echo $row['precio'];?></p>
            <p class="stock">Stock Disponible<?php echo $row['stock'];?></p>
            </div>
            <?php
            }
            ?>
            </div>
        </div>
    </div>
</main>