<?php
$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system inovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);


$correo=$_POST['correo']; 




$sql="INSERT INTO reservas VALUE ('0' '$correo')";
$resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());

