<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inicio de sesion 2.css">
    <a href="index.php" id="atras-btn">atras</a>   
</head>
<body>
<img src="logo aplicacion.png" alt="Logo de Modistería" style="width:150px;height:200px;position: fixed;top:20px;left:20px;z-index:9999999">
<div class="formulario">
<h1>inicio sesion</h1>
<form action="verusuariosadmi.php" method="post">
<div class="username">
<input type="text" name="correo" id="correo"require placeholder="">
<label>correo</label>

</div>
<div class="username">
<input type="password" name="clave" id="contraseña"require placeholder="">
<label>Contraseña</label>

</div>

<input type="submit" value="Iniciar">
<div class="registrarse">
<a href="crear cuenta.php">Registro modisteria</a>



</div>


</form>

</div>


</body>
</html>