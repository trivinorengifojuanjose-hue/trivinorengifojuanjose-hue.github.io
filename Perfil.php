<?php
error_reporting(0);
$idestampado=$_GET['numero'];
$servicio=$_GET['servicio'];

$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
    <a href="administracion.php" id="atras-btn">atras</a>
   
    <style>
    #atras-btn {
        position: fixed;
        bottom: 20px;
        right: 50px;
        background-color: coral;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }  #atras-btn:hover {
        background-color: #ff8c00;

        }
        body {
            margin: 0; /* Elimina el margen */
            padding: 0; /* Elimina el relleno */
            background-image: url('fondoperfil.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow-x:hidden;
        }



        
        .profile-container {
        text-align: center;
    }

    .profile-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 20px;
        animation: fadeIn 0.5s ease forwards;
    }

    .profile-info {
        background-color: #f9f9f9;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
        animation: fadeInUp 0.5s ease forwards;
    }

    .profile-info li {
        list-style: none;
        margin-bottom: 15px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInLi 0.5s ease forwards;
    }

    .profile-info li:nth-child(odd) {
        animation-delay: 0.2s;
    }

    .profile-info li:nth-child(even) {
        animation-delay: 0.4s;
    }

    .profile-info li span {
        font-weight: bold;
    }

    .profile-info .title {
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLi {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }



        .profile-actions button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin: 5px; /* Añade un margen entre los botones */
        }
        header {
        
            padding: 20px;
            text-align: center;
            margin-bottom: 20px; /* Agrega espacio entre el encabezado y el perfil */
            width: 100%; /* Ocupa todo el ancho */
        }

        header h1 {
            margin: 0; /* Elimina el margen para centrar correctamente */
        }
        body {
        margin: 0;
        padding: 0;

        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    </style>

    <header>
        <h1>Mi Perfil</h1>
    </header>
    <div class="profile-container">
    <img src="Perfilimagen22.jpeg" alt="Perfil" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 20px;">
    <div class="profile-info">
            
            <?php
            $correo=$_SESSION["correo"];
          $verusuario = "select * from registro where correo='$correo'";
            $queryresultado = mysqli_query($servidor,$verusuario);

            while ($regusuario = mysqli_fetch_array($queryresultado)){
                ?>

<li style="font-size: 1.5rem;"> Nombre: <br><?php echo $regusuario['nombredeusuario']." "; ?></li>
    
        <li style="font-size: 1.5rem;"> Correo: <br><?php echo $regusuario["correo"]." "; ?></li>
        <li style="font-size: 1.5rem;"> Cedula:<br> <?php echo $regusuario["cedula"]." "; ?></li>

                <?php
            
            
            
            }
            ?>
    
        
    </div>
</body>
</html>
