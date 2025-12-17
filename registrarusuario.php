<?php
require 'conexiones/conexion.php';
$usuario="";
$clave="";
$nombrecompleto="";
$fechadenacimiento="";
$tipousuario="";
$direccion="";
$celular="";



$sql="INSERT INTO  usuario  VALUE ('0','$usuario','$clave','$nombrecompleto=','$fechadenacimiento','$tipousuario','$direccion','$celular',)"
$resultado'=mysqli_query($servidor,$sql) or die("error en consulta <br> dice:".mysqli_arror($servidor));



?>