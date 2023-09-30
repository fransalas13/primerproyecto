<?php    
include('config/db.php');
session_start();
if($_POST){
    
                    if(!empty($_POST['nombreUsuario']) and !empty($_POST['contrasenia'])){
                        

                        $usuario=$_POST['nombreUsuario'];
                        $llave=$_POST['contrasenia'];
                        $sentenciaSQL=$conexion->prepare("SELECT * FROM usuario WHERE correo='$usuario' and clave='$llave'");
                        $sentenciaSQL->execute();
                       
                        if($datos=$sentenciaSQL->fetch(PDO::FETCH_LAZY)){
                            $_SESSION['id']=$datos->id_usuario;
                            Header("Location: inicio.php");
                           
                        }else{
                            echo '<div class="alert alert-danger">Los campos no estar cargados</div>';

                    }
        }else{
          
                echo '<div class="alert alert-danger">error</div>';

        }
}

?>




<!doctype html>
<html lang="es">
  <head>
    <title>Iniciar Sesion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <a href="register.php">Registrarse</a>
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