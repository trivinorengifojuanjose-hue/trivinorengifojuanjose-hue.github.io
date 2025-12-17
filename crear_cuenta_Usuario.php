<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crear_cuenta_Usuario.css">
    <title>Register</title>
</head>
<body>

<style>
      .image-container {
            float: left;
            border-radius: 50%; 
            overflow: hidden; 
            width: 150px; 
            height: 150px; 
        }
        .image-container img {
            width: 100%; 
            height: auto; 
        }
        body {
      margin: 0;
      padding: 0;
      background-image: url('fondoimagen.jpg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh; 
    }
    h3 {
      color: white; 
 

    }
    .formulario-contenedor p a {
    color: white;
}
    </style>

<img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
      
   

    <div class="formulario-contenedor">
        <form action="insertar.php" method="post">
            <h3>Registrate Ahora</h3>
            <input type="text" name="nombre" id="nombre"require placeholder="Ingresar nombre">
            <input type="text" name="apellido" id="Apellidos"require placeholder="Ingresar apellidos">
            <input type="text" name="cedula" id="tarejeta"require placeholder="Ingresar cedula ">
            <input type="text" name="nombredeusuario" id="nombreusuario"require placeholder="Ingresar nombre de usuario">
            <input type="email" name="correo" id="correo" require placeholder="Ingresar correo">
            <input type="password" name="clave" id="contraseña"require placeholder="Ingresar contraseña">
            <div class="botones">
                <input type="submit" name="submit" value="registrarse" class="btn-formularioRegister">
            </div>
            <p> <a href="iniciodesesion.php">¿Ya tienes una cuenta?<b style="color: white;">Inicia Sesión</b></a></p>


        </form>
        
        <a href="iniciodesesion.php" id="atras-btn">atras</a>
        <?php

    ?>
    </div>
  
</body>
</html> 