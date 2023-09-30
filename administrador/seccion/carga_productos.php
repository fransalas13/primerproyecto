<?php include('cabecera.php'); ?>
<?php
$id=(isset($_POST['txtID']))?$_POST['txtID']:"";
$nombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$precio=(isset($_POST['txtPrecio']))?$_POST['txtPrecio']:"";
$stock=(isset($_POST['txtStock']))?$_POST['txtStock']:"";
$categoria=(isset($_POST['txtTipo']))?$_POST['txtTipo']:"";
$imagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";


  


include('../config/db.php');

switch($accion){
   

    case "Agregar":
        
        
        $checkbox=(isset($_POST['check']))?$_POST['check']:""; 
            foreach($checkbox as $llave => $value){
        $query="INSERT INTO productos(nombre,stock,precio,imagen,rela_marca) 
                            VALUES(:nombre,:stock,:precio,:imagen,:id_marca)";
        $sentencialSQL=$conexion->prepare($query);
        $sentencialSQL->bindParam(':nombre',$nombre);
        $sentencialSQL->bindParam(':stock',$stock);
        $sentencialSQL->bindParam(':precio',$precio);
        $sentencialSQL->bindParam(':id_marca',$value);


        

        $fecha = new DateTime();

        $nombreArchivo=($imagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";

        
        $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
        $tipo = $_FILES['txtImagen']['type'];
        

        if ($tmpImagen!="") {

            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);

        }
        

        $sentencialSQL->bindParam(':imagen',$nombreArchivo);  
        $sentencialSQL->execute();
            
            }
        
        
        header("Location:carga_productos.php");

    
        break;
    case "Modificar":
    
        $query="UPDATE PRODUCTOS SET nombre=:nombre, precio=:precio, stock=:stock WHERE id_productos=:id";
        $sentencialSQL=$conexion->prepare($query);
        $sentencialSQL->bindParam(':id',$id);
        $sentencialSQL->bindParam(':precio',$precio);
        $sentencialSQL->bindParam(':nombre',$nombre);
        $sentencialSQL->bindParam(':stock',$stock);
        
        $sentencialSQL->execute();
        
        if($imagen!=""){
            $fecha = new DateTime();
            $nombreArchivo=($imagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
            $tmpImagen = $_FILES["txtImagen"]["tmp_name"];
            
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
            
            $query="SELECT imagen FROM PRODUCTOS WHERE id_producto=:id";
            $sentencialSQL=$conexion->prepare($query);
            $sentencialSQL->bindParam(':id',$id);
            $sentencialSQL->execute();
            $producto=$sentencialSQL->fetch(PDO::FETCH_LAZY);

        if (isset($producto["imagen"])&&($producto["imagen"]!="imagen.jpg")) {
            if(file_exists("../../img".$producto["imagen"])){
                unlink("../../img".$producto["imagen"]);
                

            }
        }

            $query="UPDATE PRODUCTOS SET imagen=:imagen WHERE id_producto=:id";
            $sentencialSQL=$conexion->prepare($query);
            $sentencialSQL->bindParam(':id',$id);
            $sentencialSQL->bindParam(':imagen',$nombreArchivo);
            $sentencialSQL->execute();

        }
        header("Location:carga_productos.php");

        break;
    case "Cancelar":
        header("Location:carga_productos.php");
        break;
    case "Seleccionar":
        
            $query="SELECT * FROM PRODUCTOS WHERE id_producto=:id";
            $sentencialSQL=$conexion->prepare($query);
            $sentencialSQL->bindParam(':id',$id);
            $sentencialSQL->execute();
            $producto=$sentencialSQL->fetch(PDO::FETCH_LAZY);
            
            $nombre = $producto['nombre'];
            $stock = $producto['stock'];
            $precio = $producto['precio'];

            break;
    case "Borrar":
        $query="SELECT imagen FROM PRODUCTOS WHERE id_producto=:id";
        $sentencialSQL=$conexion->prepare($query);
        $sentencialSQL->bindParam(':id',$id);
        $sentencialSQL->execute();
        $producto=$sentencialSQL->fetch(PDO::FETCH_LAZY);

        if (isset($producto["imagen"])&&($producto["imagen"]!="imagen.jpg")) {
            if(file_exists("../../img".$producto["imagen"])){
                unlink("../../img".$producto["imagen"]);
                

            }
        }

        $query="DELETE FROM PRODUCTOS WHERE id_producto=:id;";
        $sentencialSQL=$conexion->prepare($query);
        $sentencialSQL->bindParam(':id',$id);
        $sentencialSQL->execute();
        header("Location:carga_productos.php");

        break;
}



$query="SELECT * FROM PRODUCTOS";
$sentencialSQL=$conexion->prepare($query);
$sentencialSQL->execute();
$listaproductos=$sentencialSQL->fetchAll(PDO::FETCH_ASSOC);

$consulta_marca= "SELECT * FROM MARCA";
$sentenciademarca=$conexion->prepare($consulta_marca);
$sentenciademarca->execute();
$listamarcas=$sentenciademarca->fetchAll(PDO::FETCH_ASSOC);

?>



<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Datos del Producto
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                <label for="txtID">ID</label>
                <input type="text" requiered readonly class="form-control" value="<?php echo $id?>" name="txtID" id="txtID" placeholder="ID">
                </div>
            
                <div class="form-group">
                <label for="txtNombre">Nombre del Producto:</label>
                <input type="text" required class="form-control" value="<?php echo $nombre?>" name="txtNombre" id="txtNombre" placeholder="">
                </div>
                <div class="form-group">
                <label for="txtStock">Stock:</label>
                <input type="text" class="form-control" name="txtStock" value="<?php echo $stock?>" id="txtStock" placeholder="">
                </div>
                <div class="form-group">
                <label for="txtPrecio">Precio:</label>
                <input type="text" class="form-control" name="txtPrecio"  value="<?php echo $precio?>"id="txtPrecio" placeholder="">
                </div>
                <div class="form-group">
                <label for="txtTipo">Tipo de producto:</label>
                <input type="text" class="form-control" name="txtTipo" id="txtTipo" placeholder="">
                </div>
                <div class="form-group">
                    <span id="marca" name="marca">Marcas Registradas</span>
                        <label class="la_marcas"><input type="checkbox" value="1" name="check[]" />GUCCI</label>
                        <label class="la_marcas"><input type="checkbox" value="2" name="check[]" />NIKE</label>
                        <label class="la_marcas"><input type="checkbox" value="3" name="check[]" />PUMA</label>
                        <label class="la_marcas"><input type="checkbox" value="4" name="check[]" />ADIDAS</label>
                        <label class="la_marcas"><input type="checkbox" value="5" name="check[]" />VICTORIA SECRETS</label>                                
                </div>
                <div class="form-group">
                <label for="txtImagen">Imagen:</label>
                
                <?php echo $imagen; ?>
                
                
                <?php 
                if($imagen!="") { ?>
                    <img  class="img-thumbnail rounded" src="../../img/<?php echo $imagen; ?>" width="200" height="150" alt="">

                <?php
                }
                ?>
                <input type="file" class="form-control" name="txtImagen">
                    <div class="btn-group" role="group" aria-label="">
                        <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":"";?> value="Agregar" class="btn btn-primary">Agregar</button>
                        <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":"";?> value="Modificar" class="btn btn-warning">Modificar</button>
                        <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":"";?> value="Cancelar" class="btn btn-info">Cancelar</button>
                    </div>

                </div>
            
            </form>    
        </div>
    </div>
    
</div>
<div class="col-md-7">
            <?php foreach($listaproductos as $producto){ ?>
            <tr>
            
                <td><?php echo $producto['nombre'] ?></td>
                <td>
                    <img  src="../../img/<?php echo $producto['imagen'];?>" width="100" height="100" alt="">
                </td>
                <td><?php echo $producto['precio'] ?></td>
                <td><?php echo $producto['stock'] ?></td>
                <td>
                <form method="POST">
                    <input type="text" name="txtID" id="txtID" value="<?php echo $producto['id_producto'] ?>"/>
                    <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>
                    <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>

                </form>
                </td>
            </tr>
            <?php }?>
</div>
<?php 
 
 include('../template/pie.php'); ?>