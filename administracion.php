<?php
session_start();
$usuario=$_SESSION["nombredeusuario"];
error_reporting(0);
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="secion.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
<img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
      
    <header class="main-header">
 <nav class="main-nav">
     <div class="logo">
        
        <span></span>
    </div>
    <ul>
  
</div>
   <style>
 .dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: transparent; /* Fondo transparente por defecto */
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #fff;
    padding: 20px 40px;
    font-size: 1.3rem;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #ee9d1b;
    border: 2px solid #fff;
    padding: 17px 35px;
}

.dropdown:hover .dropdown-content {
    display: block;
    background-color: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)); /* Agrega un fondo oscuro cuando se muestra el menú */
}

.dropdown-toggle {
    background-color: transparent;
    color: white;
    padding: 20px 40px;
    font-size: 1.3rem;
    border: none;
    cursor: pointer;
}
.logout-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    text-decoration: none; /* Remove underline */
}

.logout-button:hover {
    background-color: #d32f2f; /* Darken color on hover */
}

</style>
</head>
<body>





</html>
<div class="dropdown">
  <button class="dropdown-toggle">Menú</button>
  <div class="dropdown-content">
    <a href="Perfil.php">Perfil</a>

  </div>
</div>
    <li><a href="reserva.php">Reserva por IA</a>

     <li><a href="Reseñas.php"> Reseñas</a></li>
     <li><a href="sastrerias.php">Sastrerias</a></li>
     <li><a href="calificacionusuario.php">Calificaciones de sastrerias</a></li>
        <li><a href="chat_bot.php">Atencion Usuario</a></li>


 
 
    
    </ul>
    
</nav>

<div class="content-header">
<h1>STITCH WORKS</h1>
<p>Apoyamos a los pequeños negocios y futuros emprendedores, te beneficias tu y beneficias a todos</p>
<a href="Google.html" style="font-size: 30px;">Mapa</a>

</header>
<a href="iniciodesesion.php" class="logout-button">Cerrar Sesión</a> 
<?php


$id=$_SESSION["id"];
$idusuario="";

$verreservareregistro = "select * from registro where id='$id'";
$queryresultadoregistro = mysqli_query($servidor,$verreservaregistro);

while ($regreservaregistro = mysqli_fetch_array($queryresultadoregistro)){ 
$idusuario=$regreservaregistro['id'];

}
?>	
</div>


   </header>
  


  
</body>
</html>