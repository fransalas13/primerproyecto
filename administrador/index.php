
<?php 
include("config/db.php");

if(!empty($_POST["btningresar"])){


        if(empty($_POST["nombreUsuario"])and empty($_POST["contrasenia"])){
            echo "Los CAMPOS ESTAN VACIOS";
            
        }else{
            $usuario=$_POST["nombreUsuario"];
            $llave=$_POST["contrasenia"];
            $senteciaSQL=$conexion->prepare("SELECT * From usuario WHERE nom_usuario=$usuario and clave=$llave");
            if($datos=$sentenciasql->fetch_object()){
                Header("Location:inicio.php");

            }else{
                echo '<div class="alert alert-danger">error</div>';
            
            }
        }
}
   

?>




<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    <br/><br/><br/>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Login
                            </div>
                            <div class="card-body">
                                
                                <div class="alert alert-danger" role="alert">
                                </div>
                                <form action="" method="POST">
                                    <div class="form-group">
                                    <label>Usuario</label>
                                    <input type="text" class="form-control" name="nombreUsuario" id="usuario" aria-describedby="emailHelpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                    <label >Contraseña</label>
                                    <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="">
                                    </div>
                            
                                    <button type="submit" name="btningresar" class="btn btn-primary">Iniciar Como Administrador</button>
                                    </form>
                            </div>
                            
                        </div>
                    </div>   
                </div>
            </div>
 </body>
</html>