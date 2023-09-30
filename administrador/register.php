<?php include('config/db.php'); ?>
<?php
session_start();


$correoE=(!empty($_POST['correoElectronico']))?$_POST['correoElectronico']:"";
$contra=(!empty($_POST['contrasenia']))?$_POST['contrasenia']:"";


$consulta="SELECT COUNT(CORREO) FROM usuario WHERE correo=:user ";
$verificar_correo=$conexion->prepare($consulta);
$verificar_correo->bindParam(':user',$correoE);
$verificar_correo->execute();



?>


<!doctype html>
<html lang="es">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/roperiasteel.css">

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
                        Registrarse
                    </div>
                    <div class="card-body">
                        <div id="msg">
                        <!-- Mensajes de Verificacion-->
                            <div id="error" class="alert alert-danger ocultar" rolet="alert">
                                Las Contraseñas no coinciden, vuelve a intentar.
                            </div>
                            <div id="ok" class="alert alert-success ocultar" role="alert">
                                Las Contraseñas coinciden.
                            </div>
                        </div>
                            <form action="" method="POST" onsubmit="verificarPasswords(); return false">
                                <div class="form-group">
                                <div class="form-group">
                                <label>Correo Electronico</label>
                                <input type="text" class="form-control" name="correoElectronico" id="correo" aria-describedby="emailHelpId" placeholder="">
                                </div>
                                <div class="form-group">
                                <label >Contraseña</label>
                                <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña">
                                </div>                            
                                <div class="form-group">
                                <label >Repetir Contraseña</label>
                                <input type="password" class="form-control" name="repeatcontrasenia" id="repeatcontrasenia" placeholder="Contraseña">
                                </div>
                        <?php
                        
                        if($accion=(empty($_POST['btnRegistrar']))){
                            echo "Por favor ingrese su correo electronico y contraseña";
                        }
                        else{
                            if($verificar_correo->fetchColumn()>0){
                                echo '
                                    <span>
                                        Este correo ya se encuentra registrado
                                    </span>';
                            }else{
                                $sqlinsert="INSERT INTO usuario (correo, clave, rela_tipo_usuario) VALUES(:email, :palabraclave,1)";
                                $insertUsuario=$conexion->prepare($sqlinsert);
                                $insertUsuario->bindParam(':email',$correoE);
                                $insertUsuario->bindParam(':palabraclave',$contra);
                                $insertUsuario->execute();
                            
                        }
                        
                        
                        }
                 
                        ?>
                                <button type="submit" name="btnRegistrar" id="login" class="btn btn-primary">Registrarse</button>
                                </form>
                                <script src="../css/scrip.js"></script>
                    </div>
                </div>
            </div>   
        </div>
    </div>
 </body>
</html>
