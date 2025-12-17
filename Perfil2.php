<?php
error_reporting(0);
$idestampado=$_GET['numero'];
$servicio=$_GET['servicio'];

$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles</title>
    <link rel="stylesheet" href="Perfil3.css">
    <a href="administrador/administradoroficial.php" id="atras-btn">atras</a> 

</head>
<body>

<img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
    
   <style>
    .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust this value according to your layout */
            background-color: #f0f0f0; /* Set the background color */
        }

        .card-list {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center; /* Center align the heading */
            font-size: 36px; /* Set the font size */
            font-weight: bold; /* Make the font bold */
            color: #333; /* Set the text color */
            text-shadow: 2px 2px 2px #ddd; /* Add text shadow */
            margin-bottom: 30px; /* Add some bottom margin for spacing */
        }
        .card-list {
        /* Estilos de tu tarjeta */
        /* Agrega los estilos que desees */
        transition: all 0.3s ease; /* Efecto de transición */
    }
</style>
    <h1>Perfil administrador</h1>
<div class="max-width">
        
    <div class="card-list">

    <?php
            $correo=$_SESSION["correo"];
            $verusuarioadmi = "select * from usuario where correo='$correo'";
            $queryresultado = mysqli_query($servidor,$verusuarioadmi);

            while ($regusuario = mysqli_fetch_array($queryresultado)){
                ?>

<center>
            <li style="font-size: 1.5rem;"> Nombre: <br><?php echo $regusuario['nombre']; ?></li>
        </center>

        <center>
            <li style="font-size: 1.5rem;"> Correo: <br><?php echo $regusuario["correo"]; ?></li>
        </center>

        <center>
            <li style="font-size: 1.5rem;"> Celular:<br> <?php echo $regusuario["celular"]; ?></li>
        </center>

        <center>
            <li style="font-size: 1.5rem;"> Cedula:<br> <?php echo $regusuario["cedula"]; ?></li>
        </center>
                <?php
            
            
            
            }
            ?>
        </a>
    </div>
</div>
</section>

