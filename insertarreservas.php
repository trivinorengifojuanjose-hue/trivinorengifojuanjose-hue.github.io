<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);

$idsastreria=$_POST['idsastreria'];
$idservicios=$_POST['idservicios'];
$idtipoprenda= $_POST['idtipoprenda'];
$celular=$_POST['celular'];
$descripcion=$_POST['descripcion']; 
$calendario=$_POST['calendario']; 




$sql="INSERT INTO reservas VALUE ('0', '$idsastreria', '$idservicios', '$idtipoprenda', '$celular', '$descripcion','$calendario')";
$resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());



header("Location:Reservaestampado1.php");
die();