<?php

$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");
$db = "system innovation"; //Base de datos
$conexion= mysqli_select_db($servidor,$db);
session_start();




//if(isset($_POST['subir'])){
    /*
    $nombre_img = $_FILES['fotos']['name'];
    $temporal = $_FILES['fotos']['tmp_name'];
    */


$nombresastreria=$_POST['nombresastreria'];
$direccion=$_POST['direccion'];
$celulardellocal= $_POST['celulardellocal'];
$coordenadas= $_POST['coordenadas'];
$usuario=$_SESSION["id"];

$_SESSION["direccionsastreria"]=$direccion;
echo $nombresastreria;


/*
$fotoProducto = $_FILES['fotos'];


echo $temporal;
$carpeta = 'foto_sastreria';
$ruta = $carpeta . '/' . $nombre_img;
echo $ruta;

move_uploaded_file($temporal, $carpeta . '/' . $nombre_img);

*/





$select = "SELECT * FROM registrosastreria WHERE idsastrero = '$usuario'";
$result = mysqli_query($servidor, $select);






if(mysqli_num_rows($result)>0){
/*
    $sql="INSERT INTO registrosastreria VALUES ('0', '$nombresastreria', '$direccion', '$usuario','$celulardellocal','$ruta')";
    mysqli_query($conexion, $sql);
    $resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());
    
    
    header("administrador/registro.php");
    die();
    /*
}
*/

}else{
    $sql="INSERT INTO registrosastreria VALUES ('0', '$nombresastreria', '$direccion', '$usuario','$celulardellocal','$coordenadas')";
    $resultado=mysqli_query($servidor,$sql) or die ("Error en consulta <br>MySQL dice: ".mysqli_error());
    
    header("administrador/registro.php");
    die();
}


?>