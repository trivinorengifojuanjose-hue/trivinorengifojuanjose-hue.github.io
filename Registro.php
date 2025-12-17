<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];
$numeroTelefonico = $_POST['phoneNumber'];
$fechaCumpleaños = $_POST['fechaCumpleaños'];
$genero = $_POST['genero'];
$direccion = $_POST['direccion'];
$nacionalidad = $_POST['nacionalidad'];
$ciudad = $_POST['ciudad'];
$TI = $_POST['TI'];

/*
echo "Nombre: $nombre
    \nCorreo: $correo
    \nPassword: $password
    \nNúmero Teléfonico: $numeroTelefonico
    \nFecha de Cumpleaños: $fechaCumpleaños
    \nGenero: $genero
    \nDirección: $direccion
    \nNacionalidad: $nacionalidad
    \nCiudad: $ciudad
    \nTI: $TI";
*/

$select = "SELECT * FROM registro_admin WHERE correo_electronico = '$correo' || TI = '$TI'";
$result = mysqli_query($conexion, $select);

if(mysqli_num_rows($result) > 0){
    echo '<script>
        alert("El correo o ID ya están registrados");
        window.history.go(-1);
        </script>';
}else{
    $insert = "INSERT INTO registro_admin(Nombre_completo, correo_electronico, contraseña, numero_telefonico, fecha_de_cumpleaños, genero, pais, ciudad, TI, direccion, tipoUsuario) VALUES ('$nombre', '$correo', '$password', '$numeroTelefonico', '$fechaCumpleaños', '$genero', '$nacionalidad', '$ciudad', '$TI', '$direccion', 'user');";
    mysqli_query($conexion, $insert);
    header('location:../html/login.html');
}

?>