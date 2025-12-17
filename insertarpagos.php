<?php

include 'conexion.php';

$nombrecompleto=$_POST['nombreCompleto'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$pais=$_POST['pais'];
$codigop=$_POST['codigop'];
$nombretarjeta=$_POST['nombretarjeta'];
$numerotarjeta=$_POST['numerotarjeta'];
$mescaducidad=$_POST['mescaducidad'];
$añocaducidad=$_POST['añocaducidad'];
$cvv=$_POST['cvv'];

$sql = "INSERT INTO `membresia`(`nombrecompleto`, `correo`, `direccion`, `ciudad`, `pais`, `codigoP`, `nombretarjeta`, `numerotarjeta`, `mescaducidad`, `añocaducidad`, `cvv`)
        values ('$nombrecompleto', '$correo', '$direccion', '$ciudad', '$pais', '$codigop', '$nombretarjeta', '$numerotarjeta', '$mescaducidad', '$añocaducidad', '$cvv')";

      echo mysqli_query($conexion, $sql);
      header('location:1Inicio.php');
?>




