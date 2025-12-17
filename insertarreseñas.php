<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
session_start();

$nombre=$_POST['nombre'];
$idsastreria=$_POST['idsastreria'];
$comentario= $_POST['comentario'];
$idusuario= $_SESSION["idusuario"];


$sql="INSERT INTO reseñas VALUE ('0', '$nombre', '$idsastreria', '$comentario', '$idusuario')";
$resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());



header("Location: Reseñas.php");
die();
?>